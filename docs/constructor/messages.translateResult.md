# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 218

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
			text : 'cOgHuq5la7WTkpBG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 66,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 42,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 93,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 54,
					language : 'xhnjONDs1V0bAymB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 45,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : 3012333672354937940,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 67,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 70,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 41,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 21,
					document_id : -5813604432413309949,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 73,
				),
			),
		),
	),
);
```