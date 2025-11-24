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
		id : 2667772596456619388,
		access_hash : 1358341078403858907,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 19,
		from_id : $client->peerUser(
			user_id : -9135627432195127116,
		),
		date : 23,
		message : $client->textWithEntities(
			text : 'WMEUpBILy4svwhHG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 5,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 87,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'RKr63jVASFTNB7Oe',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 80,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : 3893749395960329609,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 98,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 56,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 30,
					document_id : 5233397064843128709,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 75,
				),
			),
		),
		paid_message_stars : 48328704219005777,
	),
);
```