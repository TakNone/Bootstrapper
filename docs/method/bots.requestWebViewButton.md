# bots.requestWebViewButton

**Layer** : 227

```tl
bots.requestWebViewButton#31a2a35e user_id:InputUser button:KeyboardButton = bots.RequestedButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>button</mark> | [`KeyboardButton`](type/KeyboardButton) | NOTHING |

---

## Result

[bots.RequestedButton](type/bots.RequestedButton)

---

## Example

```php
$botsRequestedButton = $client->bots->requestWebViewButton(
	user_id : $client->get_input_user(user : '@TakNone'),
	button : $client->keyboardButton(
		style : $client->keyboardButtonStyle(
			bg_primary : true,
			bg_danger : true,
			bg_success : true,
			icon : -109234487237673783,
		),
		text : 'lVRsTNm86EqKgWu9',
	),
);
```