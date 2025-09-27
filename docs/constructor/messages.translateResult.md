# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 216

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
			text : 'c8bwezPdyDYkaJSQ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 57,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 100,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 74,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 15,
					language : 'wa3pYT0QgiPlWeXs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 6428357752467703481,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 81,
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
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 100,
					document_id : 8720921235375524853,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 94,
				),
			),
		),
	),
);
```