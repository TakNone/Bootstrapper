# updateGroupCallMessage

**Description** : *A new message, reaction, paid comment or donation was received through the in\-call message overlay &raquo;*

**Layer** : 229

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
		id : 15953808457128402,
		access_hash : 4556454102509932570,
	),
	message : $client->groupCallMessage(
		from_admin : true,
		id : 50,
		from_id : $client->peerUser(
			user_id : 7256010347861191762,
		),
		date : 27,
		message : $client->textWithEntities(
			text : '1SUoLsieVOr2ku7D',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 38,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 33,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 13,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 61,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'nTrW9RmIaOsfgU5d',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 41,
					user_id : -3078067082956439409,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 94,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 64,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : -2431630750850021347,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 97,
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
					date : 50,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 53,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 27,
					old_text : 'tkBLeuz3M1x7YEAC',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 17,
				),
			),
		),
		paid_message_stars : -6064472790840092174,
	),
);
```