# groupCallMessage

**Layer** : 227

```tl
groupCallMessage#1a8afc7e flags:# from_admin:flags.1?true id:int from_id:Peer date:int message:TextWithEntities paid_message_stars:flags.0?long = GroupCallMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **from_admin** | [`flags.1?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>from_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **paid_message_stars** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[GroupCallMessage](type/GroupCallMessage)

---

## Example

```php
$groupCallMessage = $client->groupCallMessage(
	from_admin : true,
	id : 31,
	from_id : $client->peerUser(
		user_id : 6168869271521839759,
	),
	date : 97,
	message : $client->textWithEntities(
		text : 'THD5wNJQ1r0sWkLI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 14,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 92,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 30,
				language : 'MRQ98sJ3dIjZ7nWm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 1718973087578840633,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : 3402167605803385695,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 36,
				date : 58,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 46,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 29,
				old_text : 'GL3OBAIstv5CRpMk',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 92,
			),
		),
	),
	paid_message_stars : -7028957609986259176,
);
```