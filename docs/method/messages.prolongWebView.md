# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	bot : $client->get_input_user(peer : '@TakNone'),
	query_id : -320463491734612516,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 13,
		top_msg_id : 93,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'ari1WcjJQ9vuGeSZ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : '2ZIHqlDGUb3uCJcs',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 7,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : -557937804486405723,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 51,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : 7150438368353971839,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 44,
			),
		),
		quote_offset : 78,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 30,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```