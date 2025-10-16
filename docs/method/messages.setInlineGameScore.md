# messages.setInlineGameScore

**Description** : *Use this method to set the score of the specified user in a game sent as an inline message \(bots only\)*

**Layer** : 216

```tl
messages.setInlineGameScore#15ad9f64 flags:# edit_message:flags.0?true force:flags.1?true id:InputBotInlineMessageID user_id:InputUser score:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **edit_message** | [`flags.0?true`](type/true) | Set this flag if the game message should be automatically edited to include the current scoreboard |
| **force** | [`flags.1?true`](type/true) | Set this flag if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters |
| <mark>id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | ID of the inline message |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User identifier |
| <mark>score</mark> | [`int`](type/int) | New score |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->messages->setInlineGameScore(
	edit_message : true,
	force : true,
	id : $client->inputBotInlineMessageID(
		dc_id : 83,
		id : -7218868441446716114,
		access_hash : 870220765862617142,
	),
	user_id : $client->inputUserEmpty(),
	score : 72,
);
```