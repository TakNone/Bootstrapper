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
		id : -1398587126783398479,
		access_hash : 5245126523826296974,
	),
	random_id : 8489069322257396808,
	message : $client->textWithEntities(
		text : 'sMLa0FbvIC7ZJhmy',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 88,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 71,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 57,
				language : 'DPUFwim0sV5A7qOx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 13,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : -1353776003113991243,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 2,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 82,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : -3183049042733425514,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 88,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 48,
				date : 72,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 54,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 38,
				old_text : 'OWg2onTPuec4X5H7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 31,
			),
		),
	),
	allow_paid_stars : -1509873049706710632,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```