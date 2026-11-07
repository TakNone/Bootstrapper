# updateGroupCallMessage

**Description** : *A new message, reaction, paid comment or donation was received through the in\-call message overlay &raquo;*

**Layer** : 233

```tl
updateGroupCallMessage#d8326f0d call:InputGroupCall message:GroupCallMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call that received the message |
| <mark>message</mark> | [`GroupCallMessage`](type/GroupCallMessage) | Received in-call message |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallMessage(
	call : $client->inputGroupCall(
		id : 7744450158182838139,
		access_hash : -3331869426581604200,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 71,
		from_id : $client->peerUser(
			user_id : 723371089203710611,
		),
		date : 26,
		message : $client->textWithEntities(
			text : '3OFdwvZpPhRtHV02',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 11,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 63,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
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
					length : 18,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 95,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 52,
					language : 'KMTDHubzNX5jVUQ6',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 87,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : -8657494226399506902,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 88,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : -3407549034963331099,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 38,
					date : 18,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 8,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 75,
					old_text : 'fXE0M5oVq3m1luWK',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 17,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 47,
				),
			),
		),
		paid_message_stars : -3825518158121142982,
	),
);
```