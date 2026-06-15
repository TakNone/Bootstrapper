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
			text : 'Mu8RgZDhwfKBzGdU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 35,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 9,
					language : 'INZvprfxHmlUgeOC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 57,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : -521467485507151964,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 76,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : -7012500351630003463,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 39,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 74,
					date : 40,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 61,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 59,
					old_text : 'AnbDCKcgPJFZQBO6',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 80,
				),
			),
		),
	),
);
```