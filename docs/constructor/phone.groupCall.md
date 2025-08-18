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
		id : -5607231693944269795,
		access_hash : 5091794994979213209,
		duration : 72,
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
				user_id : -8028710721691215995,
			),
			date : 25,
			active_date : 36,
			source : 68,
			volume : 60,
			about : 'RVBq5KpnFmJTCoa2',
			raise_hand_rating : -5052060187984992482,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'GFvmZc9HKuUTg63f',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 83,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '0PpDtOkGNECa34wF',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 17,
			),
		),
	),
	participants_next_offset : 'ePUaRu5fdqGxmYpW',
	chats : array(
		$client->chatEmpty(
			id : -6973431181769938567,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1464669478260675071,
			title : 'xyrfCbiMOqP7jHNa',
			photo : $client->chatPhotoEmpty(),
			participants_count : 72,
			date : 42,
			version : 49,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : -5361586633703904681,
			title : 'NVQSofxmXjbaEWRP',
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
			id : 8331210224774319951,
			access_hash : 1039245492860989413,
			title : 'LXlvCiBA6FEuPWUd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O0oTxEJ2Rn7IFUVe',
					reason : 'jEiLdxzPA2tvSyFr',
					text : 'f0JXkmL2wEOWB16o',
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
				until_date : 53,
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
				until_date : 93,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 2897681531547429274,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 2583988119719083786,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 34,
			bot_verification_icon : 541381766199009922,
			send_paid_messages_stars : -518555571445247524,
			linked_monoforum_id : -4414572913835816648,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5721659370634031582,
			access_hash : -2880684809111041220,
			title : 'vx8j7snCWLhA9lo1',
			until_date : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4591196966983562249,
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
			id : -8126442086328669829,
			access_hash : -5722740952719996906,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nyJe8o7q5NHCLxAO',
					reason : 'H4AlE2S3Zo01nuXr',
					text : '8cpHAreMRktqsU2N',
				),
			),
			bot_inline_placeholder : 'VebCOHGthiMjAxSs',
			lang_code : 'XwqAfgyPJcs8eIWr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 14,
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -3434185442766065730,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -6187093105223116331,
			),
			bot_active_users : 79,
			bot_verification_icon : -6525694843529200364,
			send_paid_messages_stars : -6344388781711432460,
		),
	),
);
```