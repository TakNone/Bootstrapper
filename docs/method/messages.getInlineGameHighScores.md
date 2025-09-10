# messages.getInlineGameHighScores

**Description** : *Get highscores of a game sent using an inline bot*

**Layer** : 214

```tl
messages.getInlineGameHighScores#f635e1b id:InputBotInlineMessageID user_id:InputUser = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | ID of inline message |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Get high scores of a certain user |

---

## Result

[messages.HighScores](type/messages.HighScores)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$messagesHighScores = $client->messages->getInlineGameHighScores(
	id : $client->inputBotInlineMessageID(
		dc_id : 54,
		id : -8008487626135775282,
		access_hash : -2621480243425645592,
	),
	user_id : $client->inputUserEmpty(),
);
```