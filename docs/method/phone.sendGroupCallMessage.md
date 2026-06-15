# phone.sendGroupCallMessage

**Layer** : 227

```tl
phone.sendGroupCallMessage#b1d11410 flags:# call:InputGroupCall random_id:long message:TextWithEntities allow_paid_stars:flags.0?long send_as:flags.1?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **allow_paid_stars** | [`flags.0?long`](type/long) | NOTHING |
| **send_as** | [`flags.1?InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : -3154346475033632631,
		access_hash : -2741916494851166831,
	),
	random_id : 2011053731795456582,
	message : $client->textWithEntities(
		text : '5NQksnLb3FjID8wR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 13,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : '0JKwgyhesxWuG8SD',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : -2939305709948187613,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 73,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : 2012958769170952609,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 27,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 58,
				date : 83,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 22,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 32,
				old_text : 'aZALOnvsVF9GDCbT',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 96,
			),
		),
	),
	allow_paid_stars : 3886641207823054375,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```