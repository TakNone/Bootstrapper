# botVerifierSettings

**Description** : *Info about the current verifier bot &raquo;*

**Layer** : 233

```tl
botVerifierSettings#a12aefff flags:# can_modify_custom_description:flags.1?true icon:long company:string custom_description:flags.0?TextWithEntities = BotVerifierSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_modify_custom_description** | [`flags.1?true`](type/true) | Indicates whether the bot is allowed to set a custom description field for individual verified peers, different from the custom_description provided here |
| <mark>icon</mark> | [`long`](type/long) | Verification icon |
| <mark>company</mark> | [`string`](type/string) | The name of the organization that provides the verification |
| **custom_description** | [`flags.0?TextWithEntities`](type/TextWithEntities) | An optional default description for the verification |

---

## Type

[BotVerifierSettings](type/BotVerifierSettings)

---

## Example

```php
$botVerifierSettings = $client->botVerifierSettings(
	can_modify_custom_description : true,
	icon : -9088170126904112674,
	company : 'jXkq5eIsDpEQvYzC',
	custom_description : $client->textWithEntities(
		text : '03xlay74nRfLImDC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 45,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 93,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : 'ly6fCw9n5MxZrqPu',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : 7717584829272427297,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 79,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -1803163645303909353,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 33,
				date : 10,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 67,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 35,
				old_text : '2uLJPgyabpkj67zx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 5,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 16,
			),
		),
	),
);
```