# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 216

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
	query_id : -4901474425381948549,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 14,
		top_msg_id : 5,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'CSrmUHtNXKIkianF',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 35,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 83,
				language : '7cO5mNVSqfYy9sDJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 82,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : -7841546692897509079,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 27,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 66,
				document_id : 7465890256182231727,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 4,
			),
		),
		quote_offset : 98,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 70,
	),
	send_as : $client->inputPeerEmpty(),
);
```