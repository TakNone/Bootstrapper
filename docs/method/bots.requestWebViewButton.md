# bots.requestWebViewButton

**Description** : *Bots may use this method to prepare a peer request button for a Mini App, see here &raquo; for more info*

**Layer** : 233

```tl
bots.requestWebViewButton#31a2a35e user_id:InputUser button:KeyboardButton = bots.RequestedButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user that will use the prepared button in the Mini App |
| <mark>button</mark> | [`KeyboardButton`](type/KeyboardButton) | The button to prepare, an inputKeyboardButtonRequestPeer of any RequestPeerType |

---

## Result

[bots.RequestedButton](type/bots.RequestedButton)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUTTON_INVALID** | `400` | The specified button is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

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
			icon : -948400690652174523,
		),
		text : 'vtl1BbAzwk6m3sNd',
		type : $client->buttonTypeDefault(),
	),
);
```