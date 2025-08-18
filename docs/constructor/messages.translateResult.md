# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 211

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
			text : 'Jd3yPVozTAN6kmgW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 64,
					length : 0,
				),
				$client->messageEntityMention(
					offset : 13,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 96,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 50,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 33,
					length : 56,
				),
				$client->messageEntityEmail(
					offset : 48,
					length : 9,
				),
				$client->messageEntityBold(
					offset : 77,
					length : 22,
				),
				$client->messageEntityItalic(
					offset : 78,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 60,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 49,
					length : 67,
					language : 'WUfpDFqoZ4gRYOVS',
				),
				$client->messageEntityTextUrl(
					offset : 78,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 82,
					length : 32,
					user_id : -8191562587259112652,
				),
				$client->inputMessageEntityMentionName(
					offset : 99,
					length : 38,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 71,
					length : 32,
				),
				$client->messageEntityCashtag(
					offset : 3,
					length : 29,
				),
				$client->messageEntityUnderline(
					offset : 95,
					length : 98,
				),
				$client->messageEntityStrike(
					offset : 27,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 90,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 9,
					length : 55,
				),
				$client->messageEntityCustomEmoji(
					offset : 60,
					length : 59,
					document_id : 5824640111872927986,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 2,
					length : 5,
				),
			),
		),
	),
);
```