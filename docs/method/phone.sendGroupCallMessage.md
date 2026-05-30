# phone.sendGroupCallMessage

**Layer** : 225

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
		id : -8118023536351118659,
		access_hash : 254365670665424936,
	),
	random_id : -7912911147019903494,
	message : $client->textWithEntities(
		text : 'qevBa51ICKx98ufg',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : '564IViabmUWpq9ed',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 49,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : 924101691633788987,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 60,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 55,
				document_id : -4875861245593942763,
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
				length : 65,
				date : 15,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 39,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 38,
				old_text : 'owKesu6Ar95chtQl',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 18,
			),
		),
	),
	allow_paid_stars : -5957096413330298080,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```