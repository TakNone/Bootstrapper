# stories.stories

**Description** : *List of stories*

**Layer** : 216

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
	count : 60,
	stories : array(
		$client->storyItemDeleted(
			id : 81,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 63,
			date : 15,
			expire_date : 4,
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
			id : 72,
			date : 77,
			from_id : $client->peerUser(
				user_id : -5476483120660588514,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'u59nptogB8OcKiNd',
				story_id : 24,
			),
			expire_date : 5,
			caption : 'BADmTfYjtpiZKPFL',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 30,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 69,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 0,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 62,
					language : 'EbqYtg2eGMRiXV3x',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : 178776837742921143,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 29,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 65,
					document_id : 2204673227779246404,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 16,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'AdwoesjC1Zm8MJxr',
					address : '5YfwUERQOWS1k7AZ',
					provider : 'f3dM7PjlqGHIrctY',
					venue_id : 'TWAP2j1FX64tUbsu',
					venue_type : '7ijZ84OmQ2dWGS1h',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -3981391915216478452,
					result_id : '4mb7tAaoQGOfc8nC',
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
					channel_id : -1439080273108288853,
					msg_id : 0,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 33,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : '1R84PyuwHl0JM7VT',
					temperature_c : -553823.7861328125,
					color : 94,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'uDdMkJmUQ7Ko1ycb',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(3961387888228058479),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5269944825783263990),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6407598416339131668),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-9179574497101400072),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 52,
				forwards_count : 11,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 5,
				recent_viewers : array(-3126384097224073375),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(14),
		),
	),
	pinned_to_top : array(61),
	chats : array(
		$client->chatEmpty(
			id : 3940786052566101138,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9032570211018320370,
			title : 'sGYLrT6VilRWBtaN',
			photo : $client->chatPhotoEmpty(),
			participants_count : 26,
			date : 0,
			version : 95,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : 459837369630439451,
			title : '47kSFvY3DJuG9n65',
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
			id : 2625389415113373122,
			access_hash : 3928672152478954399,
			title : '2q4ItDiBPThvCoG6',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0qGdc83vrPOLDjez',
					reason : 'UbFvoxpYCWs3VyIz',
					text : 'C2EHY6NgVIw4vpJ3',
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
				until_date : 47,
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
				until_date : 14,
			),
			participants_count : 49,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 5613756722609763907,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : 5018889308467257844,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 49,
			bot_verification_icon : -5531942908684776264,
			send_paid_messages_stars : 576342651713010741,
			linked_monoforum_id : -967909845780649153,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6989829535037651196,
			access_hash : 7083335672296129265,
			title : '1xfe09AYp4sX5Hzr',
			until_date : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : -838366498847845459,
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
			id : -6725301397092923211,
			access_hash : 6538386913270268610,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KVY8An67EQO13qsp',
					reason : 'FfworX6OgBvpbLdP',
					text : 'Wbe6FBpTuNRgir72',
				),
			),
			bot_inline_placeholder : '1fpNDlxH3LZJgjVo',
			lang_code : 'r9owUQTu5tqDJCs8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 60,
			color : $client->peerColor(
				color : 76,
				background_emoji_id : -2598789956835071101,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 1364636660483578762,
			),
			bot_active_users : 99,
			bot_verification_icon : -3484182493423030365,
			send_paid_messages_stars : -7393420974419046144,
		),
	),
);
```