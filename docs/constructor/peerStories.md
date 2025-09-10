# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 214

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : 8691032031127858431,
	),
	max_read_id : 41,
	stories : array(
		$client->storyItemDeleted(
			id : 67,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 63,
			date : 30,
			expire_date : 71,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 31,
			date : 87,
			from_id : $client->peerUser(
				user_id : -1751954025170137430,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'P7Hclv6duhOTjXmJ',
				story_id : 7,
			),
			expire_date : 82,
			caption : 'twDsHfrCLR8OaeT3',
			entities : array(
				$client->messageEntityUnknown(
					offset : 7,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 23,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 55,
					length : 88,
				),
				$client->messageEntityBotCommand(
					offset : 14,
					length : 55,
				),
				$client->messageEntityUrl(
					offset : 70,
					length : 33,
				),
				$client->messageEntityEmail(
					offset : 92,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 6,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 63,
					length : 20,
				),
				$client->messageEntityCode(
					offset : 94,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 95,
					length : 56,
					language : 'pohSvjk4eJF9Ix6q',
				),
				$client->messageEntityTextUrl(
					offset : 97,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 78,
					length : 90,
					user_id : -5351250841885440180,
				),
				$client->inputMessageEntityMentionName(
					offset : 99,
					length : 38,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 71,
					length : 81,
				),
				$client->messageEntityCashtag(
					offset : 86,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 45,
					length : 69,
				),
				$client->messageEntityStrike(
					offset : 57,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 87,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 80,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 37,
					length : 79,
					document_id : 241386091667996370,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 43,
					length : 60,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'GTqsdP615Ulh8Iru',
					address : 'gy7pHM1jRPBUFf3s',
					provider : '80mV61egjYi9IQwM',
					venue_id : 'jz1FaWXgbrl7TuqN',
					venue_type : '7IKwD8Ug9rh5WeYi',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : 3600064721562252180,
					result_id : '6AkDCryU43QKTa0P',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : 6927789307412673619,
					msg_id : 77,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 39,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'gsZ9A6TWCQkNRbDf',
					temperature_c : -1025405.3916015625,
					color : 24,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'LqrIlzSEBwpO4yj8',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7247864573236637935),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(23050585103273348),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(903917786623767516),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(2959466195944371068),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 75,
				forwards_count : 23,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 11,
				recent_viewers : array(7913742156479371021),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(73),
		),
	),
);
```