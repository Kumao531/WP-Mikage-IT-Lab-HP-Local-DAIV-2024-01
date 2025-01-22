//document.getElementById("myForm").addEventListener("submit", function(event) {
//  event.preventDefault();
function submitForm() {

  // フォームデータを収集
  const formData = new FormData(this);
  const entries = formData.entries();
  const formObj = {};

  for (const [key, value] of entries) {
    if (!formObj[key]) {
      formObj[key] = value;
    } else if (Array.isArray(formObj[key])) {
      formObj[key].push(value);
    } else {
      formObj[key] = [formObj[key], value];
    }
  }

  // フォームデータを整形
  const dataWithLabels = Object.keys(formObj).map(key => {
    const label = document.querySelector(`label[for="${key}"]`)?.innerText || key;
    return `${label}: ${Array.isArray(formObj[key]) ? formObj[key].join(", ") : formObj[key]}`;
  }).join("\n");

  // 送信するデータを確認
  console.log(dataWithLabels);

  // AJAXリクエストでメール送信
  fetch('/wp-admin/admin-ajax.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: new URLSearchParams({
      action: 'send_contact_form',
      data: dataWithLabels
    })
  }).then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));

  wp_die();
  //});
}
