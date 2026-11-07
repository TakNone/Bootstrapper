# groupCallMessage

**Description** : *Represents an in\-call message &raquo;, emoji reaction, paid live story comment or standalone paid live story donation*

**Layer** : 233

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
	id : 12,
	from_id : $client->peerUser(
		user_id : 8705830948397478607,
	),
	date : 9,
	message : $client->textWithEntities(
		text : 'uPamTUAD6s0kiLj2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 2,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : '2hseRwBHqoECjizv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : 1859996443659245350,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 51,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : -4896318833739142368,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 0,
				date : 66,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 94,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 8,
				old_text : '907ZFyivXotaJ5uz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 2,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 100,
			),
		),
	),
	paid_message_stars : -1555612139103804136,
);
```