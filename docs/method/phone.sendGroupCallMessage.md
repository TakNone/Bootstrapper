# phone.sendGroupCallMessage

**Layer** : 218

```tl
phone.sendGroupCallMessage#87893014 call:InputGroupCall random_id:long message:TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->phone->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : 4898351733967870473,
		access_hash : 3774822945395693532,
	),
	random_id : -8435620672014830444,
	message : $client->textWithEntities(
		text : 'SKekEBipUwIxNY7c',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 88,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 75,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 85,
				language : 'V7gwWLtXICi2BpK8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 93,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : -7457975997622090496,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 36,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -1927046372264640305,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
		),
	),
);
```