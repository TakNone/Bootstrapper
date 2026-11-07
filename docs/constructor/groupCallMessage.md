# groupCallMessage

**Description** : *Represents an in\-call message &raquo;, emoji reaction, paid live story comment or standalone paid live story donation*

**Layer** : 229

```tl
groupCallMessage#1a8afc7e flags:# from_admin:flags.1?true id:int from_id:Peer date:int message:TextWithEntities paid_message_stars:flags.0?long = GroupCallMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **from_admin** | [`flags.1?true`](type/true) | Whether the message was sent by a group call admin |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| <mark>from_id</mark> | [`Peer`](type/Peer) | Displayed message author |
| <mark>date</mark> | [`int`](type/int) | Message date |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | Message text or emoji reaction; empty for standalone paid live story donations. Must be at most group_call_message_length_limit » UTF-8 characters long. For paid chats, use stars_groupcall_message_limits » to source limits according to the passed value of paid_message_stars, instead |
| **paid_message_stars** | [`flags.0?long`](type/long) | Number of Telegram Stars donated with the message or standalone donation |

---

## Type

[GroupCallMessage](type/GroupCallMessage)

---

## Example

```php
$groupCallMessage = $client->groupCallMessage(
	from_admin : true,
	id : 33,
	from_id : $client->peerUser(
		user_id : -3471612648511638065,
	),
	date : 17,
	message : $client->textWithEntities(
		text : 'oI19EYt0LfrznFuK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 42,
				language : 'XsjTaMtigNU4L3Im',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : 8773076679093089956,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 36,
				document_id : 2167589459556679091,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 25,
				date : 14,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 43,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 5,
				old_text : 'qIhXdNf4PU7onjiw',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 15,
			),
		),
	),
	paid_message_stars : 8618051977069991380,
);
```