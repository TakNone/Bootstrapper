# messages.prolongWebView

**Description** : *Indicate to the server (from the user side) that the user is still using a web app*

**Layer** : 211

```tl
messages.prolongWebView#b0d81a83 flags:# silent:flags.5?true peer:InputPeer bot:InputUser query_id:long reply_to:flags.0?InputReplyTo send_as:flags.13?InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent silently (no notifications for the receivers) |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Dialog where the web app was opened |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the web app |
| <mark>query_id</mark> | [`long`](type/long) | Web app interaction ID obtained from messages.requestWebView |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent in reply to the specified message or story |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Open the web app as the specified peer |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->messages->prolongWebView(
	silent : true,
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
	query_id : -7153466107415768803,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 17,
		top_msg_id : 59,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'Y8rs3vVqAUdLgu4H',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 73,
				length : 42,
			),
			$client->messageEntityMention(
				offset : 86,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 79,
				length : 4,
			),
			$client->messageEntityBotCommand(
				offset : 13,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 86,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 72,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 85,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 41,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 92,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'LdOKvJxe2S8aiEMp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 71,
				length : 78,
				user_id : -2782574874017396171,
			),
			$client->inputMessageEntityMentionName(
				offset : 22,
				length : 81,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 9,
				length : 18,
			),
			$client->messageEntityCashtag(
				offset : 12,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 77,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 71,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 7,
				length : 98,
			),
			$client->messageEntitySpoiler(
				offset : 44,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 67,
				length : 22,
				document_id : 4481941005480585106,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 50,
				length : 63,
			),
		),
		quote_offset : 19,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 4,
	),
	send_as : $client->inputPeerEmpty(),
);
```