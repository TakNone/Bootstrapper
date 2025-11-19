# messages.getBotCallbackAnswer

**Description** : *Press an inline callback button and get a callback answer from the bot*

**Layer** : 218

```tl
messages.getBotCallbackAnswer#9342ca07 flags:# game:flags.1?true peer:InputPeer msg_id:int data:flags.0?bytes password:flags.2?InputCheckPasswordSRP = messages.BotCallbackAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **game** | [`flags.1?true`](type/true) | Whether this is a "play game" button |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Where was the inline keyboard sent |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the Message with the inline keyboard |
| **data** | [`flags.0?bytes`](type/bytes) | Callback data |
| **password** | [`flags.2?InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | For buttons requiring you to verify your identity with your 2FA password, the SRP payload generated using SRP |

---

## Result

[messages.BotCallbackAnswer](type/messages.BotCallbackAnswer)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_RESPONSE_TIMEOUT** | `400` | A timeout occurred while fetching data from the bot |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **DATA_INVALID** | `400` | Encrypted data invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PASSWORD_MISSING** | `400` | You must enable 2FA before executing this operation |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **Timeout** | `-503` | Timeout while fetching data |

---

## Example

```php
$messagesBotCallbackAnswer = $client->messages->getBotCallbackAnswer(
	game : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 34,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	password : $client->inputCheckPasswordEmpty(),
);
```