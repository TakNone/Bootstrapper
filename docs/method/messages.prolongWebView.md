# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 227

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
	query_id : -39951115274060971,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 67,
		top_msg_id : 71,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'h0PV3Sn9CqZowFRs',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 88,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 25,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 41,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'Hc2W6YLhlAxD0gnQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -1746308880084404441,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 36,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : -3318045656502221611,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 52,
				date : 10,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 59,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 97,
				old_text : 'NRXYB3EGW8gJ0Pxc',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 63,
			),
		),
		quote_offset : 49,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 43,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```