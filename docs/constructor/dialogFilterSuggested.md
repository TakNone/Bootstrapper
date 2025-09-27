# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 216

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
		id : 88,
		title : $client->textWithEntities(
			text : 'IUhj7yGBcWHbAdvp',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		emoticon : '30h42tpkrncsTz1A',
		color : 13,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 6307153840909267503,
			),
			$client->inputPeerUser(
				user_id : 5038873327464214687,
				access_hash : -4094408985505499851,
			),
			$client->inputPeerChannel(
				channel_id : -402302853056683642,
				access_hash : 5874943405577834158,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 79,
				user_id : 3026220661344191370,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 98,
				channel_id : 5184365738972399753,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -8176193038716372923,
			),
			$client->inputPeerUser(
				user_id : -2893663962000926300,
				access_hash : 8239351503168605636,
			),
			$client->inputPeerChannel(
				channel_id : -455015247046814360,
				access_hash : -6476001235388128863,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 65,
				user_id : -6471494241474226039,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 23,
				channel_id : -2133680799727964710,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -2917686369955164297,
			),
			$client->inputPeerUser(
				user_id : -642925760778430224,
				access_hash : 7936006224848451764,
			),
			$client->inputPeerChannel(
				channel_id : 9020976147639935900,
				access_hash : 7133287238104637215,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 75,
				user_id : -4634389132261280500,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 66,
				channel_id : 2410077881239831568,
			),
		),
	),
	description : '7x61kCDMmhzIpfL2',
);
```