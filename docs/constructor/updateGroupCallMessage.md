# updateGroupCallMessage

**Layer** : 222

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
		id : -2405962143750857973,
		access_hash : -7861333794246320679,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 64,
		from_id : $client->peerUser(
			user_id : 2559796699771778426,
		),
		date : 90,
		message : $client->textWithEntities(
			text : 'IZy4MYKCklG35e2D',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 40,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 34,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 51,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'HI3rR8Vj9GlWB6UQ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -1864845785568407958,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 79,
					document_id : 1425894086147964293,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
			),
		),
		paid_message_stars : -5943030956495606266,
	),
);
```