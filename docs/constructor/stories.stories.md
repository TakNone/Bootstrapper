# stories.stories

**Description** : *List of stories*

**Layer** : 218

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of stories that can be fetched |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |
| **pinned_to_top** | [`flags.0?Vector<int>`](type/int) | IDs of pinned stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.Stories](type/stories.Stories)

---

## Example

```php
$storiesStories = $client->stories->stories(
	count : 36,
	stories : array(
		$client->storyItemDeleted(
			id : 89,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 68,
			date : 58,
			expire_date : 43,
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
			id : 19,
			date : 67,
			from_id : $client->peerUser(
				user_id : 719898945570697644,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 1658235636410401498,
				),
				from_name : '31nAzJdkHPoxeUwI',
				story_id : 62,
			),
			expire_date : 92,
			caption : 'CPVcklJIvHyonU8O',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 53,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 74,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 18,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 38,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'rmEkRFM7w5gTB2PA',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : 774427126360417510,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 8,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 43,
					document_id : -1488464128231388565,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 14,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -141535.4267578125,
						y : 1922605.0166015625,
						w : -1178768.0126953125,
						h : 1417501.275390625,
						rotation : 1291313.873046875,
						radius : -281987.1611328125,
					),
					geo : $client->geoPointEmpty(),
					title : 'nKeL5Gsgl2T4ZBQM',
					address : 'NYpFoUeJVfWtK9Z5',
					provider : 'CLH5XGuD9h74fnB3',
					venue_id : 'jYEZxP01SFel45gd',
					venue_type : 'mulsPQfckh60gHdb',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -2018061.6025390625,
						y : 9646.0908203125,
						w : 1408017.5673828125,
						h : 950791.07421875,
						rotation : -151056.220703125,
						radius : -647234.6591796875,
					),
					query_id : -6524536927057650414,
					result_id : 'i98RBQ13hNUSnbOm',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -1376511.376953125,
						y : 1929339.0546875,
						w : -890991.5263671875,
						h : -484664.626953125,
						rotation : 1434345.6591796875,
						radius : -307383.9169921875,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : '6DcqPUdKeTLsk8yo',
						state : '6fxIji1dUYMmuVFA',
						city : '9HP6wYnmCVgIZUhz',
						street : '1eGHQDpxFhrL9obs',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -248676.5986328125,
						y : -889982.5009765625,
						w : -1460027.92578125,
						h : -1933677.0673828125,
						rotation : 1158099.2685546875,
						radius : 1610632.552734375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 587473.1318359375,
						y : 580105.6064453125,
						w : 1230246.87109375,
						h : -76264.4345703125,
						rotation : -89286.3935546875,
						radius : 1975996.4072265625,
					),
					channel_id : 1296663221963383222,
					msg_id : 86,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -1794091.83984375,
						y : -501642.1376953125,
						w : -1518389.0126953125,
						h : -608148.3388671875,
						rotation : -704989.017578125,
						radius : 1462086.8037109375,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 5,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -1984200.5380859375,
						y : -643602.5947265625,
						w : 353834.6240234375,
						h : 1500607.7021484375,
						rotation : 1387919.8369140625,
						radius : 481102.1328125,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -1395348.97265625,
						y : -224403.921875,
						w : -1772572.7392578125,
						h : -2089160.068359375,
						rotation : 1216348.744140625,
						radius : -2073122.2314453125,
					),
					emoji : '54ovYZeigh2qmVTn',
					temperature_c : 1596001.87109375,
					color : 33,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1392443.0947265625,
						y : -877375.9560546875,
						w : 393122.4931640625,
						h : -695234.466796875,
						rotation : -797899.7646484375,
						radius : -935361.6455078125,
					),
					slug : 'ZMiY1KLnEhq96lXR',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7893283659058406204),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4779045525687464664),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(2787884631383527824),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(7115559492964198650),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 29,
				forwards_count : 37,
				reactions : array(
					$client->reactionCount(
						chosen_order : 95,
						reaction : $client->reactionEmpty(...),
						count : 46,
					),
				),
				reactions_count : 55,
				recent_viewers : array(236110476439159202),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(66),
		),
	),
	pinned_to_top : array(96),
	chats : array(
		$client->chatEmpty(
			id : 1183385327262267760,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4589911841566328336,
			title : '4daev9j7zwrXBpVM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 68,
			date : 52,
			version : 82,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 40,
			),
		),
		$client->chatForbidden(
			id : -2117067668193301931,
			title : 'GltFE904Bg7RxXcK',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -460686780804632387,
			access_hash : -1625296533138784274,
			title : 'WXFUe7flVDSsY0vb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JgdfFEGzuHQowMAT',
					reason : 'OJtD2pWTYazE984h',
					text : '8xH5eCbzW6m7B1RN',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 66,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 81,
			),
			participants_count : 33,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 22,
			),
			color : $client->peerColor(
				color : 39,
				background_emoji_id : -5633402602688932455,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : 5223337569906164278,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 39,
			subscription_until_date : 39,
			bot_verification_icon : 3570736199406270704,
			send_paid_messages_stars : 4247692774835868870,
			linked_monoforum_id : -6356232083939836833,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1984319299787813763,
			access_hash : -64875999478224164,
			title : '6DN30f89yPqoxQXe',
			until_date : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3818631762992270273,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 3317876897256395083,
			access_hash : -3421993011139721842,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hbvu5JAz82GVZj6l',
					reason : 'q6t9PG2O8ByDlgHz',
					text : 'wF7Wdi3sj8Ue1Enx',
				),
			),
			bot_inline_placeholder : 'nSxVeA4MErvTOXyQ',
			lang_code : 'qxoE0854gmJ9utnQ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 92,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -5510462117047681137,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 7164983151278958762,
			),
			bot_active_users : 7,
			bot_verification_icon : 1148102940934512022,
			send_paid_messages_stars : -5076485394203175148,
		),
	),
);
```