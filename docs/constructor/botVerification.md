# botVerification

**Description** : *Describes a bot verification icon &raquo;*

**Layer** : 233

```tl
botVerification#f72e0ed9 bot_id:long icon:long description:TextWithEntities = BotVerification;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the bot that verified this peer |
| <mark>icon</mark> | [`long`](type/long) | Verification icon |
| <mark>description</mark> | [`TextWithEntities`](type/TextWithEntities) | Verification description |

---

## Type

[BotVerification](type/BotVerification)

---

## Example

```php
$botVerification = $client->botVerification(
	bot_id : 6157882137457814953,
	icon : 3782512894372243859,
	description : $client->textWithEntities(
		text : 'MJtIRx1g3knjSd20',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 2,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : '5hgQcjXmoMPvt3Y6',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 95,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : 6245649981559508218,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : -4534440301351069258,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 23,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 47,
				date : 74,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 81,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 48,
				old_text : 'MwS4FlzD3iOKAmrG',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 13,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 10,
			),
		),
	),
);
```