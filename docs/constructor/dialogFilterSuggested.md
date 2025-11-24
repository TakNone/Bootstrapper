# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 218

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 0,
		title : $client->textWithEntities(
			text : 'pGUvCu9exRFi426I',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 74,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 98,
					language : 'Wa5YMj7ZVwvxzLO8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 77,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : -4808137984876142041,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 21,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 27,
					document_id : 7975577463071097483,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 27,
				),
			),
		),
		emoticon : 'Sg3RbBUesAJCokwW',
		color : 11,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'aL3wNoHke1brxJjh',
);
```