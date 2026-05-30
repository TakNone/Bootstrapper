# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 222

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
	query_id : 4297472792869114473,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 33,
		top_msg_id : 83,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'TmEnctbdeuQDJ4Ov',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 8,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 63,
				language : 'b0JWc4ekfXYq1EQ9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : 1418262156391334322,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : -6057084535920124313,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
		quote_offset : 26,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 66,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```