# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 225

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
			text : 'bMOsExPyXT7Cpzca',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 17,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 72,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 90,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 63,
					language : 'O4NHk63JQsAfLiMT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 49,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : -2824581733692177649,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 55,
					document_id : -395972719124980110,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 50,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 2,
					date : 19,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 56,
					old_text : 'X2s8nFDqPpw9eLH5',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 47,
				),
			),
		),
	),
);
```