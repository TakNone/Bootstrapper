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
	count : 1,
	stories : array(
		$client->storyItemDeleted(
			id : 27,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 100,
			date : 69,
			expire_date : 12,
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
			id : 71,
			date : 59,
			from_id : $client->peerUser(
				user_id : 421972201695303148,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'bsjSznwPEJ7NeDiC',
				story_id : 97,
			),
			expire_date : 22,
			caption : 'LWuQ1sdhP48NiHjV',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 5,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 97,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 97,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 91,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 0,
					language : 'CqMvwnm7JrjpWuN0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -8816673494427279590,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 47,
					document_id : -6109952347631552347,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 23,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'Q1kxfHOYGhdNl4Rj',
					address : 'SgETFHAsueqdBwIc',
					provider : 'yzg96fjeLloHDuZX',
					venue_id : 'jdKMUzxlICwpT4nk',
					venue_type : 'iyNtPowjXQUpD6fI',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -760403247847478417,
					result_id : 'Ij6wMCBNkcE4u25f',
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
					channel_id : 215363596607883878,
					msg_id : 75,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 70,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : '9XQgxtunGKeqFlkp',
					temperature_c : 762078.572265625,
					color : 52,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : '64W91atmM5CqxcL3',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(861306976990725066),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2376564933564589198),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6510500338119753559),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5897072228313935487),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 76,
				forwards_count : 33,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 60,
				recent_viewers : array(-8824806921315289200),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(3),
		),
	),
	pinned_to_top : array(75),
	chats : array(
		$client->chatEmpty(
			id : -8998365025710949958,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3812170385694614645,
			title : 'Ycuvlwqp03tQLsaS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 25,
			date : 26,
			version : 12,
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
				until_date : 8,
			),
		),
		$client->chatForbidden(
			id : 2889322899688285599,
			title : 'Tjvq1PA7clXpobw5',
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
			id : -6693372709239801662,
			access_hash : 196302783032174256,
			title : 'QfwSUb28AXCVlaiD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oqLMFw6DjQ3mJYV9',
					reason : 'aklPvYs7OI2E4uVF',
					text : 'IQ0qY1w3XdDe9ChB',
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
				until_date : 57,
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
				until_date : 97,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 7756106099854854994,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : 3978982353955589150,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 57,
			subscription_until_date : 100,
			bot_verification_icon : 9141567868357840990,
			send_paid_messages_stars : 595104065984429962,
			linked_monoforum_id : 2083450596384782301,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4123294193158336544,
			access_hash : 9173967083428699206,
			title : 'yPL3adHXKp0WUlVf',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4787525530984342137,
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
			id : -7071243798065801429,
			access_hash : 5220264699459317963,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mWyRMHIbZ8Qkv7lV',
					reason : 'SeGNlkj7OhPY86m3',
					text : 'd90rRA7NfOZnXqml',
				),
			),
			bot_inline_placeholder : 'rUROKjPBTh9J3kSZ',
			lang_code : 'STAdqM74cZLXOwVR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -8291570134854994550,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -7618446265731955563,
			),
			bot_active_users : 38,
			bot_verification_icon : -3891783298433962128,
			send_paid_messages_stars : -4224235501455263179,
		),
	),
);
```