# bots.setBotMenuButton

**Description** : *Sets the menu button action » for a given user or for all users*

**Layer** : 211

```tl
bots.setBotMenuButton#4504d54f user_id:InputUser button:BotMenuButton = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |
| <mark>button</mark> | [`BotMenuButton`](type/BotMenuButton) | Bot menu button action |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUTTON_TEXT_INVALID** | `400` | The specified button text is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->bots->setBotMenuButton(
	user_id : $client->inputUserEmpty(),
	button : $client->botMenuButtonDefault(),
);
```