# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 227

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : 4718855118160879000,
				),
			),
			pts : 42,
			pts_count : 50,
		),
		$client->updateMessageID(
			id : 92,
			random_id : -2404279469180132313,
		),
		$client->updateDeleteMessages(
			messages : array(45),
			pts : 61,
			pts_count : 41,
		),
		$client->updateUserTyping(
			user_id : 553094911726257268,
			top_msg_id : 75,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -8853692114957090670,
			from_id : $client->peerUser(
				user_id : 7131141843653029787,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 2686495018802872575,
				self_participant : $client->chatParticipant(
					user_id : -7606488906460886425,
					inviter_id : -1701658817296987719,
					date : 82,
					rank : 'eubSiY24p1Q3vWng',
				),
			),
		),
		$client->updateUserStatus(
			user_id : 8354545344680014722,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 3020970844383842578,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 44,
			device : 'RsFW7wuUjoyv9AhV',
			location : 'mOrRB0oQ5iMKPYfw',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5362839909461497084,
				chat_id : 67,
				date : 25,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 2,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 42,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 37,
			),
			date : 50,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 36,
			max_date : 11,
			date : 66,
		),
		$client->updateChatParticipantAdd(
			chat_id : 2584675810104625649,
			user_id : -3115561135243998049,
			inviter_id : -4466425381968015068,
			date : 13,
			version : 35,
		),
		$client->updateChatParticipantDelete(
			chat_id : 1831877238830686323,
			user_id : -489748139296682769,
			version : 92,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 28,
					ip_address : '127.0.0.1',
					port : 14,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -5222814919624687379,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 38,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 96,
			type : 'TJ9NtzwIMa1VhYFK',
			message : 'cOD48BJznutGxedV',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 69,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 69,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 40,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 52,
					language : 's6yljNeXDktor40R',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : -4024929801085837579,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 3,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 11,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : -6436073025427106918,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 58,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 16,
					date : 39,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 27,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 66,
					old_text : '0wXYbpWNfAUSzEFu',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 25,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8818702517838382823),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1117251557753735543),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6559043531632254651),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(4046957783602470047),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -7819172639585171698,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 90,
			peer : $client->peerUser(
				user_id : -6056099664834986600,
			),
			top_msg_id : 17,
			max_id : 84,
			still_unread_count : 50,
			pts : 100,
			pts_count : 49,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 6905283991539355144,
			),
			max_id : 46,
			pts : 53,
			pts_count : 31,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1294829488256326712,
				url : 'https://docs.liveproto.dev',
			),
			pts : 98,
			pts_count : 21,
		),
		$client->updateReadMessagesContents(
			messages : array(34),
			pts : 56,
			pts_count : 45,
			date : 32,
		),
		$client->updateChannelTooLong(
			channel_id : 7959036678810389561,
			pts : 81,
		),
		$client->updateChannel(
			channel_id : -7724742463947522230,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(
					user_id : -1363011919832625479,
				),
			),
			pts : 54,
			pts_count : 57,
		),
		$client->updateReadChannelInbox(
			folder_id : 58,
			channel_id : -3979650223639445580,
			max_id : 69,
			still_unread_count : 11,
			pts : 55,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -7809032538596065756,
			messages : array(75),
			pts : 68,
			pts_count : 24,
		),
		$client->updateChannelMessageViews(
			channel_id : -3487681764417317962,
			id : 31,
			views : 95,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5436046216355738466,
			user_id : 3597113011828476993,
			is_admin : true,
			version : 74,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 34,
					id : -4109383193025501303,
					access_hash : 8212922019671839986,
					title : 'QbhVJ2SeOtP6Lswf',
					short_name : '7xnP9tiralKLYJvk',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 59,
					thumb_version : 24,
					thumb_document_id : 7992016619691758124,
					count : 16,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : '3y0iOW9rVYDmI2eA',
						documents : array(-8852219747503043927),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -3413240424236138718,
						keyword : array('yos5HbWhgSDMaAnj'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 6088374985184601101,
					),
					$client->document(
						id : 7193732289466589367,
						access_hash : -439797963229120887,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 88,
						mime_type : 'zAhPXvMQTFoBOVrJ',
						size : -1806807503205126685,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 99,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(4785021469194550492),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 4406209155933458583,
			user_id : 2385612963515886641,
			query : 'EhvNUxtwloSPzFG5',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'BxM9Ph3eDU2AoySt',
		),
		$client->updateBotInlineSend(
			user_id : -4835032585638672010,
			query : 'C8Xko7xwKD3SVyLg',
			geo : $client->geoPointEmpty(),
			id : 'vjLkJw9mXZW5CK6t',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 10,
				id : -2214214792987650884,
				access_hash : 1371770504868725639,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -8535854026311979652,
				),
			),
			pts : 80,
			pts_count : 44,
		),
		$client->updateBotCallbackQuery(
			query_id : -3102104649393765350,
			user_id : -8091159068220522365,
			peer : $client->peerUser(
				user_id : -143605617283597360,
			),
			msg_id : 96,
			chat_instance : 5021819847347488123,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'WvaVNLhp73r2FcX5',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : -6898248684183180338,
				),
			),
			pts : 53,
			pts_count : 68,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6335904577879245497,
			user_id : 6763323057699881294,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 13,
				id : 4808135036643926824,
				access_hash : -5542733119956076501,
			),
			chat_instance : -7206747990425456586,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'FdorAwiNq7GUtSuL',
		),
		$client->updateReadChannelOutbox(
			channel_id : -4810688913861711559,
			max_id : 39,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 2630907275137219255,
			),
			top_msg_id : 94,
			saved_peer_id : $client->peerUser(
				user_id : 5717933480817838635,
			),
			draft : $client->draftMessageEmpty(
				date : 81,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 2832539658105176369,
			webpage : $client->webPageEmpty(
				id : 669780126009642087,
				url : 'https://docs.liveproto.dev',
			),
			pts : 85,
			pts_count : 29,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 23,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5373661544247914765,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 53,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -6847941298771301346,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 76,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'z9PtrCuAamcgWRwY',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 3550176145175511981,
			data : $client->dataJSON(
				data : 'gvqNRCSVODpXFbHm',
			),
			timeout : 99,
		),
		$client->updateBotShippingQuery(
			query_id : -629916230485791019,
			user_id : 214174466203658199,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'fnOt75I6XB1eyvVi',
				street_line2 : '2JVQHWg9ODfGNuaM',
				city : 'VqSmY8wTb0MWcp5Q',
				state : 'pQoV582INfuxCMES',
				country_iso2 : 'PCEMJLhHR92mA43I',
				post_code : '1uMl6hEJaCI8iLYT',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5333099151504267142,
			user_id : -2683193493020850975,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'lXAWqE3S8obfsrDk',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'HESMY5toy8mFKP4O',
					street_line2 : 'NdkMP0qALrYaiK6D',
					city : 'jKSgmAYEG4sWncRv',
					state : 'J0dm7Pjc189zvTo3',
					country_iso2 : 'jJREQ3b9ianTGIU1',
					post_code : 'whbru4vXmdl8gioa',
				),
			),
			shipping_option_id : 'siUFZG7lWbr6kQVf',
			currency : 'YmtfvX71B8x26Apg',
			total_amount : 8757380028658417561,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 6454272592566528817,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ZTYltyaC5piU7nD9',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'wWnxdtZoV9AS8Pl7',
				from_version : 94,
				version : 81,
				strings : array(
					$client->langPackString(
						key : 'fbj1zOcdhNx0q68P',
						value : '6agXhOUYZyA3CKQu',
					),
					$client->langPackStringPluralized(
						key : '2fyUkI7C4OHca1nR',
						zero_value : '6HoYjXciarmUbNRg',
						one_value : '7AT9tsrz3ohvHWnK',
						two_value : 'V4DQ23FarH7EjT8R',
						few_value : '5fw8tl7y9IX6Ti1e',
						many_value : '82AQ3JSsq5eoOhl9',
						other_value : 'dDkKOiIucY3vQX9A',
					),
					$client->langPackStringDeleted(
						key : 'KkROuC8Z5ldsh12m',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 1839794329600608948,
			top_msg_id : 64,
			saved_peer_id : $client->peerUser(
				user_id : 6027991418439389657,
			),
			messages : array(57),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 1599078546030384659,
			available_min_id : 52,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6201157846455752793,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 8038305985393739617,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 456362875533359037,
			),
			msg_id : 72,
			top_msg_id : 93,
			poll_id : 7236172810304362495,
			poll : $client->poll(
				id : -3152013278124697501,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'hHlrNkfaUPB6cWGQ',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 58,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 60,
				close_date : 38,
				countries_iso2 : array('Z4eGUAlkVguN9ixE'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 23,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 60,
				recent_voters : array(
					$client->peerUser(
						user_id : 6100356808582224186,
					),
					$client->peerChat(
						chat_id : 966241597835837517,
					),
					$client->peerChannel(
						channel_id : -6427844957028943441,
					),
				),
				solution : '2HgmYUDVk8NqlCzO',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 29,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 89,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 83,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 81,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'HuxXB3Mk1QODA7dS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 78,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : 8726675501822203059,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 64,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 87,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 37,
						document_id : 2083737996849651312,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 18,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 75,
						date : 85,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 16,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 20,
						old_text : '2HGFSfUmO1kDEiY9',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 24,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -5887539440439745666,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 85,
			),
			version : 59,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 1203454591037730035,
					),
					folder_id : 12,
				),
			),
			pts : 25,
			pts_count : 77,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 6946751641238344483,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 42,
				request_chat_title : 'ETDOzU1IecLYqFa8',
				request_chat_date : 75,
				business_bot_id : -7794672054051441970,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 5670017728002952534,
				registration_month : '6VCwEP8toRkHAZiK',
				phone_country : '+1234567890',
				name_change_date : 89,
				photo_change_date : 95,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -8058594581899647986,
					),
					expires : 95,
					distance : 46,
				),
				$client->peerSelfLocated(
					expires : 12,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -2118035544000037007,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 1316691481544546768,
			),
			messages : array(90),
			sent_messages : array(91),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3652018137200937502,
				access_hash : -3345218107655476657,
				slug : 'd4091sSxWYZmEzKO',
				title : 'keq8GHX1IyMvzplD',
				document : $client->documentEmpty(
					id : -4148112648155306934,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 29,
						outbox_accent_color : 65,
						message_colors : array(4),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'sz9Zyr24kLiXvFVG',
				installs_count : 8,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8020460234331799896,
			),
			msg_id : 57,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 5520809976481215242,
			peer : $client->peerUser(
				user_id : -9255263566228245,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(58),
			qts : 3,
		),
		$client->updateDialogFilter(
			id : 22,
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
				id : 83,
				title : $client->textWithEntities(
					text : 'GWeCcoAOmlL7QxaR',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'rhvk0ZlnKtLio2p7',
				color : 10,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(73),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -5265960875294438496,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3023411974387260728,
			id : 32,
			forwards : 75,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 1126813993831803045,
			top_msg_id : 77,
			read_max_id : 63,
			broadcast_id : -3469390543491227951,
			broadcast_post : 11,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4454238645229737525,
			top_msg_id : 23,
			read_max_id : 82,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 5995823585651185008,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -5821076870819901551,
			top_msg_id : 29,
			from_id : $client->peerUser(
				user_id : 8494013922044533165,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -8418969228164312849,
			),
			messages : array(7),
			pts : 6,
			pts_count : 73,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -2256720040694096937,
			messages : array(89),
			pts : 56,
			pts_count : 84,
		),
		$client->updateChat(
			chat_id : 3209531622715450612,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8022796284628492562,
				access_hash : 1146235501093261168,
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
						user_id : 770664056803155891,
					),
					date : 47,
					active_date : 74,
					source : 64,
					volume : 20,
					about : 'ruQftM9TGOHkFnol',
					raise_hand_rating : -954593731593460331,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '68Vhj4YGAfoLaNDB',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 49,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'UBHhswDNcokirjaX',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 84,
					),
					paid_stars_total : 4666272082925028944,
				),
			),
			version : 19,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -3676111985890444349,
			),
			call : $client->groupCallDiscarded(
				id : -7091262612734922963,
				access_hash : 3195954771945015201,
				duration : 37,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -6888923805728703088,
			),
			ttl_period : 24,
		),
		$client->updateChatParticipant(
			chat_id : -1791289743366421710,
			date : 49,
			actor_id : -5054357014797217610,
			user_id : -7080868550614935402,
			prev_participant : $client->chatParticipant(
				user_id : -7746018650429447582,
				inviter_id : 9044509951582992206,
				date : 81,
				rank : '8UMEN5oPybrWzZwR',
			),
			new_participant : $client->chatParticipant(
				user_id : 3003558704571493082,
				inviter_id : 1572272338830800347,
				date : 91,
				rank : '39muy0jHwgx2nUNd',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'gBuj67tWmHqUi5Ll',
				admin_id : 4434235309862490617,
				date : 85,
				start_date : 100,
				expire_date : 89,
				usage_limit : 98,
				usage : 46,
				requested : 14,
				subscription_expired : 3,
				title : 'Kjw2dQGtc7HDkWL4',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 47,
					amount : 3856209822358507079,
				),
			),
			qts : 29,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -7462646120168619970,
			date : 73,
			actor_id : 5523363308862416638,
			user_id : 1313425419229802532,
			prev_participant : $client->channelParticipant(
				user_id : 3238429027512474692,
				date : 75,
				subscription_until_date : 91,
				rank : 'OX3tSD6xkLC7yFmM',
			),
			new_participant : $client->channelParticipant(
				user_id : -3238558613751893580,
				date : 34,
				subscription_until_date : 93,
				rank : 'S5qDgNsMHtPUo4uL',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'deygTXK1YAmn0CF5',
				admin_id : -1705176946170171965,
				date : 38,
				start_date : 38,
				expire_date : 74,
				usage_limit : 16,
				usage : 54,
				requested : 72,
				subscription_expired : 40,
				title : 'XfBWjKpuzywIgJ30',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 25,
					amount : 8167719559315991156,
				),
			),
			qts : 20,
		),
		$client->updateBotStopped(
			user_id : 7587258376514808328,
			date : 26,
			stopped : false,
			qts : 24,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'wHjN2ApGRBKQDk0e',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7672179762952949000,
			),
			bot_id : -5278249157092221725,
			commands : array(
				$client->botCommand(
					command : 'BZOax1sIVGg9nMXL',
					description : 'T27mcW4GAlBan1E8',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -802390244908523312,
			),
			requests_pending : 44,
			recent_requesters : array(-5831602862103285576),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 7077870764175331971,
			),
			date : 57,
			user_id : 7683346103598457817,
			about : 'vCJF1PXG4HifrmAx',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'UgsZ1w38zxcVNOkS',
				admin_id : -6863399345267450667,
				date : 33,
				start_date : 5,
				expire_date : 96,
				usage_limit : 97,
				usage : 12,
				requested : 1,
				subscription_expired : 32,
				title : 'NMCyedSR8rc02ZqF',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 39,
					amount : 285617134851385116,
				),
			),
			qts : 10,
			query_id : 3839590291060716795,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 8367715663487498558,
			),
			msg_id : 59,
			top_msg_id : 88,
			saved_peer_id : $client->peerUser(
				user_id : 1180459071922095996,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 64,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 33,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -2874171390092164326,
		),
		$client->updateBotMenuButton(
			bot_id : -5590147105723150566,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -3052455526008019545,
			),
			msg_id : 7,
			transcription_id : -6838391930908665560,
			text : 'Fy9nt46sU7OXcli1',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4927661758354857958,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -844356274499707261,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -8664594417496606985,
			),
			msg_id : 37,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 34,
					h : 23,
					thumb : $client->photoSizeEmpty(
						type : 'erynmRouIsKq1J9N',
					),
					video_duration : 5,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -6040428233222185777,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -8714799510259997559,
			),
			story : $client->storyItemDeleted(
				id : 32,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 1268464161027967029,
			),
			max_id : 72,
		),
		$client->updateStoryID(
			id : 37,
			random_id : -6358844023355682987,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 96,
				cooldown_until_date : 29,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -2372632580831713485,
			),
			story_id : 79,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -8203352214878512299,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'Zs5DERIVH0YN6dfu',
				user_id : -289523153802745105,
				giveaway_msg_id : 36,
				date : 41,
				expires : 20,
				used_gift_slug : 'YO3Rzvm9Kg0UqIAN',
				multiplier : 99,
				stars : -298617272249838097,
			),
			qts : 64,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 5505535772489116064,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 551729251494111138,
			),
			wallpaper : $client->wallPaper(
				id : -4797674448238572446,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5289768874923744643,
				slug : 'VcNF1HMUDPmgsp3l',
				document : $client->documentEmpty(
					id : 6083058875656605855,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 3,
					second_background_color : 49,
					third_background_color : 63,
					fourth_background_color : 26,
					intensity : 14,
					rotation : 97,
					emoticon : 'mja1uyboq5P2LF3O',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1122944015023190917,
			),
			msg_id : 70,
			date : 38,
			actor : $client->peerUser(
				user_id : 492030668441942305,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'X8vG5ucbtrWSRAOP',
				),
				$client->reactionCustomEmoji(
					document_id : -1902083540125781568,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'RtBnEfszG1beyCKF',
				),
				$client->reactionCustomEmoji(
					document_id : 2738389773026740944,
				),
				$client->reactionPaid(),
			),
			qts : 23,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 4745369525937150869,
			),
			msg_id : 67,
			date : 47,
			reactions : array(
				$client->reactionCount(
					chosen_order : 31,
					reaction : $client->reactionEmpty(),
					count : 91,
				),
			),
			qts : 0,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1285394250596852342,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -3747449663865061011,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 26,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'z6FEfPblJ0j3QmcD',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 95,
					shortcut : 'ihqL3SWbR62Qn4yt',
					top_message : 59,
					count : 45,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 61,
				shortcut : '4FwMWVTG3eNg0sIo',
				top_message : 73,
				count : 79,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 22,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 19,
				peer_id : $client->peerUser(
					user_id : 3190418621583095835,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 87,
			messages : array(48),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'KOF59bqoT2hRrydg',
				user_id : -2839472644749808919,
				dc_id : 2,
				date : 96,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 94,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'vXlOpn9jBfiJrCdY',
			message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(
					user_id : 2732336415186097706,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : 838406410435347582,
				),
			),
			qts : 22,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '1N5pcxPQ8u4MaBbl',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(
					user_id : 7096224453159597762,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(
					user_id : 1286417250359303433,
				),
			),
			qts : 16,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'IcmfudPJqV8g64Hz',
			peer : $client->peerUser(
				user_id : 6089525803126410332,
			),
			messages : array(79),
			qts : 95,
		),
		$client->updateNewStoryReaction(
			story_id : 51,
			peer : $client->peerUser(
				user_id : 1083504509336402853,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 727486514846097635,
				nanos : 64,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 3395696429165976490,
			user_id : 6962990653208674468,
			connection_id : '97u68YcWROodDZA1',
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : -1841255070951380779,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(
					user_id : 903165292646991672,
				),
			),
			chat_instance : -6525842165496333078,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -8802003701911463759,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 3906440609493768860,
					nanos : 2,
				),
				available_balance : $client->starsAmount(
					amount : 7385120913650069809,
					nanos : 80,
				),
				overall_revenue : $client->starsAmount(
					amount : 4155860303799527730,
					nanos : 78,
				),
				next_withdrawal_at : 54,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 2375939585794180183,
			payload : 'qPbCu4s6lacx2gQN',
			qts : 98,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 93,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 73,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -1454281924835064499,
				access_hash : -7211854885526711081,
			),
			sub_chain_id : 66,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 87,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 5455604624828069793,
			saved_peer_id : $client->peerUser(
				user_id : -2609626051160056078,
			),
			read_max_id : 59,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8507987988671130838,
			saved_peer_id : $client->peerUser(
				user_id : 6891164933021485309,
			),
			read_max_id : 0,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 2894173855773846179,
			saved_peer_id : $client->peerUser(
				user_id : -486943708109979712,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -2162576902273348249,
				access_hash : 5672906469410162956,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 89,
				from_id : $client->peerUser(
					user_id : 1311059000879733853,
				),
				date : 20,
				message : $client->textWithEntities(
					text : '7ipwcvesB0Wrtqob',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : 8863335113063308533,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 7134676059705294493,
				access_hash : -6072297326624525046,
			),
			from_id : $client->peerUser(
				user_id : -8788018244564056365,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -993912543570585205,
			),
			topic_id : 60,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 7410315597738921740,
			),
			order : array(71),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 8450988170815874584,
				access_hash : 3077418110606205541,
			),
			messages : array(17),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -272021647455586665,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -6236676293742182798,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -4245729354798238472,
				bid_date : 86,
				min_bid_amount : 4935769868844183931,
				bid_peer : $client->peerUser(
					user_id : -5675713468378343364,
				),
				acquired_count : 56,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : -7504496986116265083,
			user_id : 4146418651153421514,
			rank : 'rGZQ5FERcCbuHUmi',
			version : 6,
		),
		$client->updateManagedBot(
			user_id : -7655708393874348687,
			bot_id : -6934331789518439671,
			qts : 13,
		),
		$client->updateBotGuestChatQuery(
			query_id : -3177613153151337924,
			message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(
					user_id : 8559223175040439714,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 36,
					peer_id : $client->peerUser(
						user_id : 759693401641207707,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 95,
					from_id : $client->peerUser(
						user_id : -8381179434349993729,
					),
					from_boosts_applied : 34,
					from_rank : 'v4hyOgGnCrfeBFMX',
					peer_id : $client->peerUser(
						user_id : 8938930899023875238,
					),
					saved_peer_id : $client->peerUser(
						user_id : 8032111621067980357,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'Q5q3Y7oJ4TKumHcb',
						date : 43,
						channel_post : 38,
						post_author : 'JgEmS7NIy8THB4vp',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 11,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'xPSlYUyHcI0oVKei',
						saved_date : 31,
						psa_type : 'A3crHxNhb0PIRWDZ',
					),
					via_bot_id : -1225083338182889346,
					via_business_bot_id : -4734922412389962785,
					guestchat_via_from : $client->peerUser(
						user_id : -2626663610586131466,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 44,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 82,
						quote_text : 'BJI5SFshfb279GzV',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 96,
						todo_item_id : 30,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 79,
					message : 'r64DfMzhBsdjemY8',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 65,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 59,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 21,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 89,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 31,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 9,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 98,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 31,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 5,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 96,
							language : 'hynaMZdcumTtpXFz',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 8,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 18,
							user_id : -8504599070524718904,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 82,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 2,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 83,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 34,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 74,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 51,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 76,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 60,
							document_id : -1495674465881151400,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 30,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 45,
							date : 4,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 86,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 30,
							old_text : 'VUGXw827pePAD60c',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 8,
						),
					),
					views : 35,
					forwards : 8,
					replies : $client->messageReplies(
						comments : true,
						replies : 72,
						replies_pts : 21,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -3333055817851369334,
						max_id : 36,
						read_max_id : 41,
					),
					edit_date : 4,
					post_author : '6gD75j1B9amMRdHt',
					grouped_id : -386853549868225731,
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'm0GBYg4lsZpkDXf9',
							reason : 'qNgy7pZu1AiGC43c',
							text : 'J2oILlnR7XDmESWG',
						),
					),
					ttl_period : 70,
					quick_reply_shortcut_id : 15,
					effect : -9018315420468199804,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'ljpdhBUni1rvDCYA',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 13,
					paid_message_stars : -6584035688048646556,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 0,
					),
					schedule_repeat_period : 91,
					summary_from_language : 'HgmCEXRAtdMqc4vS',
					rich_message : $client->richMessage(
						rtl : true,
						part : true,
						blocks : array(
							$client->pageBlockUnsupported(...),
							$client->pageBlockTitle(...),
							$client->pageBlockSubtitle(...),
							$client->pageBlockAuthorDate(...),
							$client->pageBlockHeader(...),
							$client->pageBlockSubheader(...),
							$client->pageBlockParagraph(...),
							$client->pageBlockPreformatted(...),
							$client->pageBlockFooter(...),
							$client->pageBlockDivider(...),
							$client->pageBlockAnchor(...),
							$client->pageBlockList(...),
							$client->pageBlockBlockquote(...),
							$client->pageBlockPullquote(...),
							$client->pageBlockPhoto(...),
							$client->pageBlockVideo(...),
							$client->pageBlockCover(...),
							$client->pageBlockEmbed(...),
							$client->pageBlockEmbedPost(...),
							$client->pageBlockCollage(...),
							$client->pageBlockSlideshow(...),
							$client->pageBlockChannel(...),
							$client->pageBlockAudio(...),
							$client->pageBlockKicker(...),
							$client->pageBlockTable(...),
							$client->pageBlockOrderedList(...),
							$client->pageBlockDetails(...),
							$client->pageBlockRelatedArticles(...),
							$client->pageBlockMap(...),
							$client->pageBlockHeading1(...),
							$client->pageBlockHeading2(...),
							$client->pageBlockHeading3(...),
							$client->pageBlockHeading4(...),
							$client->pageBlockHeading5(...),
							$client->pageBlockHeading6(...),
							$client->pageBlockMath(...),
							$client->pageBlockThinking(...),
							$client->inputPageBlockMap(...),
							$client->pageBlockBlockquoteBlocks(...),
						),
						photos : array(
							$client->photoEmpty(...),
							$client->photo(...),
						),
						documents : array(
							$client->documentEmpty(...),
							$client->document(...),
						),
					),
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 91,
					from_id : $client->peerUser(
						user_id : 6424667762450923096,
					),
					peer_id : $client->peerUser(
						user_id : 7865001224343070953,
					),
					saved_peer_id : $client->peerUser(
						user_id : 9199623401563539380,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 17,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 74,
						quote_text : 'ETnh8yaipKuWVLAq',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 81,
						todo_item_id : 57,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 74,
					action : $client->messageActionEmpty(),
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					ttl_period : 75,
				),
			),
			qts : 16,
		),
		$client->updateAiComposeTones(),
		$client->updateJoinChatWebViewDecision(
			peer : $client->peerUser(
				user_id : -53852649104471573,
			),
			query_id : -54334725574573831,
			result : $client->joinChatBotResultApproved(),
		),
		$client->updateNewBotConnection(
			confirmed : true,
			bot_id : 7109022190361457262,
			date : 89,
			device : 'vJgj2neGX4pY09Wb',
			location : '9iqNcQPULvm70T3F',
		),
		$client->updateWebBrowserSettings(
			open_external_browser : true,
			display_close_button : true,
		),
		$client->updateWebBrowserException(
			delete : true,
			open_external_browser : false,
			exception : $client->webDomainException(
				domain : 'SO6qoldnmpPKgUYR',
				url : 'https://docs.liveproto.dev',
				title : 'HINBPizdaXcD3VUg',
				favicon : 5238758453075244821,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -24474726309568115,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 2215752500863455087,
			access_hash : -4880904305369430463,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fdV7eqspL3tK2QwP',
					reason : 'fXYey28CSK1oITGa',
					text : '7lSzpqjym4OscH86',
				),
			),
			bot_inline_placeholder : '7hOYbaXm0p9vyPV1',
			lang_code : 'RMHjivV2ZNUaPlTs',
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
				color : 6,
				background_emoji_id : 1055486088796654408,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -3788718229339031557,
			),
			bot_active_users : 73,
			bot_verification_icon : 6168105353924951888,
			send_paid_messages_stars : -7236660649573393091,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1682623415814553821,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8213360080441230018,
			title : 'XcU1COs7K930kugT',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 96,
			version : 92,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 98,
			),
		),
		$client->chatForbidden(
			id : 5163317972398369892,
			title : 'LwptGRBdjOrmDHfX',
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
			id : -8388563243513381848,
			access_hash : -5336401012150650517,
			title : 'lwb9hnuocRH3UCvq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iT9pCetm4AEarYky',
					reason : 'BoHmOGLDc8JAWVw3',
					text : 'InMF0CaPAVek7Giq',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 37,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 26,
			),
			participants_count : 85,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 99,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -9207534845773602581,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 7008105461783829302,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 36,
			subscription_until_date : 94,
			bot_verification_icon : 561753159797400508,
			send_paid_messages_stars : 9070204181574772430,
			linked_monoforum_id : 5629120547568915802,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 2176905376313662439,
			access_hash : 7603447171084072513,
			title : 'm9Ae0Ky6xJgBQzDS',
			until_date : 57,
		),
	),
	date : 69,
	seq_start : 57,
	seq : 2,
);
```