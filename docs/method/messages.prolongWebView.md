# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

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
	query_id : -5533646129302995118,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 96,
		top_msg_id : 66,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'ToDd05GY7egASf2u',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 98,
				length : 4,
			),
			$client->messageEntityMention(
				offset : 65,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 40,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 44,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 100,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 22,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 16,
				length : 44,
			),
			$client->messageEntityItalic(
				offset : 87,
				length : 10,
			),
			$client->messageEntityCode(
				offset : 47,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 61,
				length : 16,
				language : 'nSAcoqGX2Or8EwpB',
			),
			$client->messageEntityTextUrl(
				offset : 67,
				length : 62,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 60,
				length : 26,
				user_id : -2186556600155655447,
			),
			$client->inputMessageEntityMentionName(
				offset : 27,
				length : 91,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 60,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 45,
				length : 36,
			),
			$client->messageEntityUnderline(
				offset : 82,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 46,
				length : 61,
			),
			$client->messageEntityBankCard(
				offset : 22,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 88,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 1,
				length : 52,
				document_id : 791446103284614845,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 12,
				length : 88,
			),
		),
		quote_offset : 75,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 29,
	),
	send_as : $client->inputPeerEmpty(),
);
```