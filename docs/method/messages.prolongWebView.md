# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 229

```tl
messages.prolongWebView#b0d81a83 flags:# silent:flags.5?true peer:InputPeer bot:InputUser query_id:long reply_to:flags.0?InputReplyTo send_as:flags.13?InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	bot : $client->get_input_user(user : '@TakNone'),
	query_id : 2975810293545809440,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 28,
		top_msg_id : 34,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : '6USxe0gEl1oyKYGZ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 17,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 35,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : '3zreWKTYJj0QBv2N',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : -5969871620123475147,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 69,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 25,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 41,
				document_id : 1238897261495229355,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 46,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 79,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 20,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 31,
				old_text : 'o9wipjs4nmIGJdOQ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
		),
		quote_offset : 84,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 84,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```