# updateGroupCallMessage

**Layer** : 218

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
		id : 6359567620644229344,
		access_hash : -6003841884230990563,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 71,
		from_id : $client->peerUser(
			user_id : 5156455281291131387,
		),
		date : 20,
		message : $client->textWithEntities(
			text : '3M4YmBlXv8pHRn21',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 23,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 49,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 53,
					language : '8zMQr35YOCkxZW6m',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : -6190566472882102550,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 42,
					document_id : 5140848204819725793,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
		),
		paid_message_stars : -516321212671436561,
	),
);
```