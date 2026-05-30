# updateGroupCallMessage

**Layer** : 225

```tl
updateGroupCallMessage#d8326f0d call:InputGroupCall message:GroupCallMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>message</mark> | [`GroupCallMessage`](type/GroupCallMessage) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallMessage(
	call : $client->inputGroupCall(
		id : -7329800737884986480,
		access_hash : 8348151757538787117,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 32,
		from_id : $client->peerUser(
			user_id : -331533137317996402,
		),
		date : 93,
		message : $client->textWithEntities(
			text : 'lzBxojGA8EOFy6VZ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 29,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 36,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 48,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'jUqcyDGblICBZFAM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 10,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : -5231483826722113025,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 73,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 16,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : 6609325135885761363,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 12,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 69,
					date : 94,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 88,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 68,
					old_text : 'kVnFgSrJLHRE4A9p',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 4,
				),
			),
		),
		paid_message_stars : -5412242946542923345,
	),
);
```