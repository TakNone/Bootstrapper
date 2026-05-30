# contacts.sponsoredPeers

**Description** : *Sponsored peers*

**Layer** : 222

```tl
contacts.sponsoredPeers#eb032884 peers:Vector<SponsoredPeer> chats:Vector<Chat> users:Vector<User> = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SponsoredPeer>`](type/SponsoredPeer) | Sponsored peers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Info about sponsored chats and channels |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about sponsored users |

---

## Type

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->sponsoredPeers(
	peers : array(
		$client->sponsoredPeer(
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			peer : $client->peerUser(
				user_id : -66177235528141413,
			),
			sponsor_info : '1rPtHsFeCl7fcLyz',
			additional_info : 'D8jXZInKt9S0Mdwq',
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3802319374924551200,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5243656178108223375,
			title : 'iMGvhlHZEPTyX9U6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 82,
			date : 39,
			version : 91,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -5601611039628465275,
			title : 'fLrGPEFsDTd7lehA',
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
			id : -3906330644679317365,
			access_hash : -5509634737277311665,
			title : 'WrEAbyHgJxS32uli',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6m3MOyitPHSr1DT2',
					reason : 'P8mLDhCKbntjUpOf',
					text : 'qwkdJ3nH9iSrPD0U',
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
				until_date : 49,
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
				until_date : 80,
			),
			participants_count : 38,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 81,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -6836322045941968263,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -443959106791603506,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 79,
			subscription_until_date : 92,
			bot_verification_icon : 6423121470765886565,
			send_paid_messages_stars : 2067210336771594516,
			linked_monoforum_id : -1073042220999596713,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3529477001737910635,
			access_hash : 233307774860305215,
			title : 'GXmSzNuvfbTqVQat',
			until_date : 73,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5700870935671940667,
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
			bot_forum_can_manage_topics : true,
			id : 287007149590877661,
			access_hash : 4729863747343523108,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5LIZMncQxYKpytzP',
					reason : '7iw8Dmy3gexldkYt',
					text : 'f5iH2sLpcxWK39Uz',
				),
			),
			bot_inline_placeholder : 'Ho34khVJTUM0eWb2',
			lang_code : 'AhD0z3BdcEjbpWNm',
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
				max_id : 97,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 6106505372679250873,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : -5294239318460030611,
			),
			bot_active_users : 75,
			bot_verification_icon : -4572877916997395840,
			send_paid_messages_stars : 8364820752021198904,
		),
	),
);
```