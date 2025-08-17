# phone.groupCall

**Description** : *Contains info about a group call, and partial info about its participants*

**Layer** : 211

```tl
phone.groupCall#9e727aad call:GroupCall participants:Vector<GroupCallParticipant> participants_next_offset:string chats:Vector<Chat> users:Vector<User> = phone.GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | A partial list of participants |
| <mark>participants_next_offset</mark> | [`string`](type/string) | Next offset to use when fetching the remaining participants using phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the participants vector |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the participants vector |

---

## Type

[phone.GroupCall](type/phone.GroupCall)

---

## Example

```php
$phoneGroupCall = $client->phone->groupCall(
	call : $client->groupCallDiscarded(
		id : -2578398025970198393,
		access_hash : -857618519590239852,
		duration : 6,
	),
	participants : array(
		$client->groupCallParticipant(
			muted : true,
			left : true,
			can_self_unmute : true,
			just_joined : true,
			versioned : true,
			min : true,
			muted_by_you : true,
			volume_by_admin : true,
			self : true,
			video_joined : true,
			peer : $client->peerUser(
				user_id : -984438257527730589,
			),
			date : 42,
			active_date : 70,
			source : 20,
			volume : 31,
			about : 'yCKPL9kwdgVs6G2D',
			raise_hand_rating : -3204923996739484404,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'TqgD7FNnR3U0MXAY',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 23,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'e8YyXtFEkQHOubUV',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 1,
			),
		),
	),
	participants_next_offset : 'w4xk2dv6ZKThcND5',
	chats : array(
		$client->chatEmpty(
			id : -7474056657183170463,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5045503451069517559,
			title : 'OZzHRybTYnSqGAtc',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 53,
			version : 44,
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
				until_date : 96,
			),
		),
		$client->chatForbidden(
			id : 2543982294872084798,
			title : 'aEQR3Y0L9mlpPeAf',
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
			id : -3303719963126095310,
			access_hash : 7319332242464642830,
			title : 'o84M3stO5RAYhvKS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wlBpFbKTGhtXPYm7',
					reason : 'VzcsNngTSpuZIQ2O',
					text : 'zdjngMIlX1fCWFbP',
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
				until_date : 85,
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
				until_date : 38,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 39,
			color : $client->peerColor(
				color : 24,
				background_emoji_id : 5990963312619046797,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 3478145823960341658,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 8,
			subscription_until_date : 85,
			bot_verification_icon : 1604481503716844098,
			send_paid_messages_stars : -4718404859173185812,
			linked_monoforum_id : 7708521798384013019,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1380024423381379390,
			access_hash : -6758927489891679098,
			title : 'l1JQNanc0F2ib75B',
			until_date : 9,
		),
	),
	users : array(
		$client->userEmpty(
			id : 185174867155899939,
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
			id : 6794948827963821128,
			access_hash : 4765366405273923222,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'N9MOmYhTE24dfPo0',
					reason : 'j4bSlMs2Uka0Zvwi',
					text : 'wNWM63Oipzmgn58R',
				),
			),
			bot_inline_placeholder : 'aBHqyfF5On8jDuIi',
			lang_code : 'YgKboysFBa3eIAv8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 73,
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -8129428970583468517,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 977269458300303313,
			),
			bot_active_users : 18,
			bot_verification_icon : -285271963464622967,
			send_paid_messages_stars : 8032803513486873645,
		),
	),
);
```