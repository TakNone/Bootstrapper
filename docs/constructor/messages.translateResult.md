# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 229

```tl
messages.translateResult#33db32f8 result:Vector<TextWithEntities> = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`Vector<TextWithEntities>`](type/TextWithEntities) | Text+entities, for each input message |

---

## Type

[messages.TranslatedText](type/messages.TranslatedText)

---

## Example

```php
$messagesTranslatedText = $client->messages->translateResult(
	result : array(
		$client->textWithEntities(
			text : 'uEMk5Wqs1ygPRGD8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 15,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 90,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 15,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'M9JNu0PnzeqwB7jS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : 2818537284505224654,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 59,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 61,
					document_id : 5206698960447730768,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 8,
					date : 25,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 26,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 77,
					old_text : 'AiR5JhmqjoKa1GrV',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 11,
				),
			),
		),
	),
);
```