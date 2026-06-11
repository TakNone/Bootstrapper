# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 227

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
			text : 'em14kxAPf9wTY3nG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 73,
					language : 'NGCcuoYxLXDBA1EV',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : 3617281276575433608,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 94,
					document_id : 5555896444045033476,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 13,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 4,
					date : 36,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 39,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 67,
					old_text : 'jI8sclfHaYAiGvmW',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 61,
				),
			),
		),
	),
);
```