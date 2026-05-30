# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 222

```tl
messages.saveDraft#54ae308e flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo peer:InputPeer message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia effect:flags.7?long suggested_post:flags.8?SuggestedPost = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Disable generation of the webpage preview |
| **invert_media** | [`flags.6?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **reply_to** | [`flags.4?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Destination of the message that should be sent |
| <mark>message</mark> | [`string`](type/string) | The draft |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **media** | [`flags.5?InputMedia`](type/InputMedia) | Attached media |
| **effect** | [`flags.7?long`](type/long) | Specifies a message effect » to use for the message |
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->saveDraft(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 43,
		top_msg_id : 9,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'AtBL1McdRV9Ga5Yp',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 92,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 96,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 69,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 40,
				language : 'hnsDdeKtO7WEQZCX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : -5683524517104950623,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 86,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 46,
				document_id : 5907775693674655548,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
		),
		quote_offset : 76,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 18,
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : 'P1l4jL20C7fzQbHs',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 21,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 25,
			language : 'KVOpBNwfDvEiUFWj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 26,
			user_id : -1618060062156463892,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 25,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 91,
			document_id : 4813984329824155824,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 58,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	effect : 1670460640785004031,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 6061626906153920931,
			nanos : 6,
		),
		schedule_date : 94,
	),
);
```