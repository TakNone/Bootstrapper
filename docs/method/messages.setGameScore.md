# messages.setGameScore

**Description** : *Use this method to set the score of the specified user in a game sent as a normal message \(bots only\)*

**Layer** : 214

```tl
messages.setGameScore#8ef8ecc0 flags:# edit_message:flags.0?true force:flags.1?true peer:InputPeer id:int user_id:InputUser score:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **edit_message** | [`flags.0?true`](type/true) | Set this flag if the game message should be automatically edited to include the current scoreboard |
| **force** | [`flags.1?true`](type/true) | Set this flag if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Unique identifier of target chat |
| <mark>id</mark> | [`int`](type/int) | Identifier of the sent message |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User identifier |
| <mark>score</mark> | [`int`](type/int) | New score |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_SCORE_NOT_MODIFIED** | `400` | The score wasn't modified |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SCORE_INVALID** | `400` | The specified game score is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$updates = $client->messages->setGameScore(
	edit_message : true,
	force : true,
	peer : $client->inputPeerEmpty(),
	id : 30,
	user_id : $client->inputUserEmpty(),
	score : 95,
);
```