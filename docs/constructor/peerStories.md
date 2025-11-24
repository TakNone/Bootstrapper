# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 218

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
		user_id : -8312270345488913660,
	),
	max_read_id : 76,
	stories : array(
		$client->storyItemDeleted(
			id : 97,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 17,
			date : 39,
			expire_date : 22,
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
			id : 69,
			date : 1,
			from_id : $client->peerUser(
				user_id : -1818015687956778732,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 1566530774126222039,
				),
				from_name : 'ApLI9biO1VZM07tn',
				story_id : 61,
			),
			expire_date : 89,
			caption : 'gqnp8ikDPlBwXVRo',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 67,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 92,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 77,
					language : 'Mu6khYXSTfrQJIHG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 91,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -5567328604513812427,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 54,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 60,
					document_id : -9218713664512882806,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 7,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 627194.21484375,
						y : 1083310.6669921875,
						w : 680396.0869140625,
						h : 2048354.9033203125,
						rotation : -901895.314453125,
						radius : 1126362.021484375,
					),
					geo : $client->geoPointEmpty(),
					title : '5CWDEOZQjqNBIkxR',
					address : 'BO0hL8lrx9pSszWN',
					provider : 'bxXYHVoI3j70rLEm',
					venue_id : 'frgwiHh7yDacVs9t',
					venue_type : 'vRy1KtEcpB4V5QHl',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -94917.7783203125,
						y : 1383256.814453125,
						w : -1020609.935546875,
						h : -1496902.126953125,
						rotation : 433029.666015625,
						radius : -1992602.46875,
					),
					query_id : 3733761999259283185,
					result_id : 'Juk0ngBa2HetUj1b',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -694302.1943359375,
						y : 1208284.7744140625,
						w : -1227434.005859375,
						h : -961247.9248046875,
						rotation : -1115952.2568359375,
						radius : -1929130.3984375,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'sHPEwYUdSbVoKDyl',
						state : 'YnIJ6WXuaShqpQ2T',
						city : 'l8RyS2x5aWV0BsKv',
						street : 'ebWUpTghXj3QuEy9',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 1047730.9111328125,
						y : -851670.5869140625,
						w : -232316.0078125,
						h : -1351762.0986328125,
						rotation : 1104710.1416015625,
						radius : 2078783.037109375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1351517.5908203125,
						y : 1203963.3662109375,
						w : -1863695.8017578125,
						h : -1431385.5244140625,
						rotation : 97895.5986328125,
						radius : -1971280.3408203125,
					),
					channel_id : 6152869105626095168,
					msg_id : 58,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -888701.3125,
						y : -1236787.76953125,
						w : -1320497.19140625,
						h : -1731554.767578125,
						rotation : -1524596.6328125,
						radius : 510261.853515625,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 74,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -120112.5048828125,
						y : -1025879.021484375,
						w : 1968259.232421875,
						h : -1925644.8515625,
						rotation : 287599.15625,
						radius : -1574916.4892578125,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -303341.20703125,
						y : -1869000.5341796875,
						w : -982862.0810546875,
						h : -1574752.8994140625,
						rotation : 431392.08984375,
						radius : -560927.8759765625,
					),
					emoji : '7UXmb6xIP9nqMLHG',
					temperature_c : 1995737.8662109375,
					color : 66,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -328017.8642578125,
						y : 1704072.333984375,
						w : -1957128.716796875,
						h : -708495.6220703125,
						rotation : 1079688.7646484375,
						radius : 49711.5498046875,
					),
					slug : 'Jek0f5tdvnYV1PpR',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7585053595611249239),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8832434543201958000),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2756560888829243788),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(7506609074569979458),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 86,
				forwards_count : 54,
				reactions : array(
					$client->reactionCount(
						chosen_order : 98,
						reaction : $client->reactionEmpty(...),
						count : 64,
					),
				),
				reactions_count : 76,
				recent_viewers : array(-4442089089090773685),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(56),
		),
	),
);
```