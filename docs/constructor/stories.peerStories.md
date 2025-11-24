# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 218

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -3919433774872715501,
		),
		max_read_id : 46,
		stories : array(
			$client->storyItemDeleted(
				id : 61,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 6,
				date : 70,
				expire_date : 2,
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
				id : 96,
				date : 5,
				from_id : $client->peerUser(
					user_id : -5481728416791401683,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : '6ELmUIjNG81i9T05',
					story_id : 39,
				),
				expire_date : 55,
				caption : 'yHvKEl8rXp02b43s',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 34,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 74,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 41,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 55,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 43,
						language : '7XVtiw5qKLUyf4SJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 79,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : -4426862806607404001,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 13,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 51,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : 8816378246934879718,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'T9yvw7GSI1MUrn3O',
						address : 'HmcJVBDGjhWAduLy',
						provider : '65CKPDRZjIVg4k3c',
						venue_id : 'rx1WfevE3F7DRw0s',
						venue_type : 'z8IPSEV3tAvHF57s',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -1812547675634770343,
						result_id : '9nad2qrF8VzOAvwI',
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
						channel_id : -8183124108575469132,
						msg_id : 36,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 56,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'EHrzgnyl6VAfCpwI',
						temperature_c : 1470375.322265625,
						color : 56,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'bRmoHPz9CcZWkBpD',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(1053289077666818696),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(8656315323384791206),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-7977634420744856479),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(1632166524881898370),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 1,
					forwards_count : 46,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 32,
					recent_viewers : array(6556930532765400952),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(77),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2002140147137496096,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8030410795724815119,
			title : 'PBNZT405nphXCk92',
			photo : $client->chatPhotoEmpty(),
			participants_count : 73,
			date : 72,
			version : 21,
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
				until_date : 77,
			),
		),
		$client->chatForbidden(
			id : 1671440830074753131,
			title : 'ScOyjReqFahAdvit',
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
			id : -4824230260047124745,
			access_hash : 2804043122871712677,
			title : 'BcVYFJ0O14HzR6gD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DGAnwXmThil2Fsca',
					reason : 'gIbOjlim0zUQ2BMD',
					text : '9boD3HRawy2ilpBV',
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
				until_date : 41,
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
				until_date : 41,
			),
			participants_count : 68,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 39,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -1096596852862944528,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 8314598889569858204,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 26,
			subscription_until_date : 30,
			bot_verification_icon : 2192109584079472469,
			send_paid_messages_stars : -3665069210191643466,
			linked_monoforum_id : -1721396131974485271,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7600053881919246682,
			access_hash : -4491675708890358893,
			title : 'ybrD2MFZUsOgaSBu',
			until_date : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1269262605228297622,
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
			id : 2955825995231711446,
			access_hash : 3383415667843940268,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'N2qMVeDyCRrWs1uA',
					reason : '7V9m2o60bgAHGwCE',
					text : 'HvMxsl2dLeErfB8i',
				),
			),
			bot_inline_placeholder : 'fig06j7BEZXMpwxQ',
			lang_code : 'OCxwmiJ7GNkFzpRa',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -3694149804641603723,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 5740088584605053075,
			),
			bot_active_users : 21,
			bot_verification_icon : -1077919876862248529,
			send_paid_messages_stars : -4442128232673661390,
		),
	),
);
```