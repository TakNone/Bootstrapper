# bots.getBotMenuButton

**Description** : *Gets the menu button action for a given user or for all users, previously set using bots.setBotMenuButton; users can see this information in the botInfo constructor*

**Layer** : 211

```tl
bots.getBotMenuButton#9c60eb28 user_id:InputUser = BotMenuButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID or empty for the default menu button |

---

## Result

[BotMenuButton](type/BotMenuButton)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$botMenuButton = $client->bots->getBotMenuButton(
	user_id : $client->inputUserEmpty(),
);
```