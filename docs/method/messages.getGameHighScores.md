# messages.getGameHighScores

**Description** : *Get highscores of a game*

**Layer** : 216

```tl
messages.getGameHighScores#e822649d peer:InputPeer id:int user_id:InputUser = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Where was the game sent |
| <mark>id</mark> | [`int`](type/int) | ID of message with game media attachment |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Get high scores made by a certain user |

---

## Result

[messages.HighScores](type/messages.HighScores)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$messagesHighScores = $client->messages->getGameHighScores(
	peer : $client->inputPeerEmpty(),
	id : 96,
	user_id : $client->inputUserEmpty(),
);
```