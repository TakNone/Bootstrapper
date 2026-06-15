# bots.getRequestedWebViewButton

**Layer** : 227

```tl
bots.getRequestedWebViewButton#bf25b7f3 bot:InputUser webapp_req_id:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>webapp_req_id</mark> | [`string`](type/string) | NOTHING |

---

## Result

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->bots->getRequestedWebViewButton(
	bot : $client->get_input_user(user : '@TakNone'),
	webapp_req_id : 'majCB3VNkIMJFDRy',
);
```