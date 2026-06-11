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
				id : 99,
				peer_id : $client->peerUser(
					user_id : 6163663835234539934,
				),
			),
			pts : 14,
			pts_count : 2,
		),
		$client->updateMessageID(
			id : 12,
			random_id : 8169726705745582918,
		),
		$client->updateDeleteMessages(
			messages : array(78),
			pts : 2,
			pts_count : 63,
		),
		$client->updateUserTyping(
			user_id : 3485213965705503198,
			top_msg_id : 28,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -4842113794959611909,
			from_id : $client->peerUser(
				user_id : -4015016533982008891,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -4189172090235295624,
				self_participant : $client->chatParticipant(
					user_id : 8221323743237482715,
					inviter_id : -3172375746436000153,
					date : 32,
					rank : 'ouHD2itd1bh80PBM',
				),
			),
		),
		$client->updateUserStatus(
			user_id : 1185478996178912212,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4304217096045558815,
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
			date : 19,
			device : '9PEH5hz7vUfy4nWj',
			location : '0kholFd3nGtU7Y91',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3330129752200198322,
				chat_id : 19,
				date : 10,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 55,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 59,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 35,
			),
			date : 55,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 88,
			max_date : 81,
			date : 6,
		),
		$client->updateChatParticipantAdd(
			chat_id : -7678330446618195820,
			user_id : 3588998962247257131,
			inviter_id : 8703397365165004230,
			date : 25,
			version : 25,
		),
		$client->updateChatParticipantDelete(
			chat_id : -6988939251733682864,
			user_id : 5077487579367787959,
			version : 3,
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
					id : 72,
					ip_address : '127.0.0.1',
					port : 88,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -2771859860132259219,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 25,
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
			inbox_date : 55,
			type : 'DMAHP5iYedLIcXbo',
			message : 'PdpvO1HjaKi45Uqn',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 80,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 87,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 92,
					language : 'yzTt5KWdo8NuiUP0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 886758181396520785,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 100,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 88,
					document_id : 1403937671167149626,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 8,
					date : 44,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 84,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 96,
					old_text : 's8RLVJt4IbpleHYv',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 76,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(481346467111566492),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2928295667543990292),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3866492653605822212),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(3701077516916658820),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -8560789532316866780,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 72,
			peer : $client->peerUser(
				user_id : -7625866421743055375,
			),
			top_msg_id : 79,
			max_id : 52,
			still_unread_count : 14,
			pts : 86,
			pts_count : 67,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 7236842885030189623,
			),
			max_id : 26,
			pts : 22,
			pts_count : 82,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 3559287874995447130,
				url : 'https://docs.liveproto.dev',
			),
			pts : 60,
			pts_count : 26,
		),
		$client->updateReadMessagesContents(
			messages : array(40),
			pts : 45,
			pts_count : 94,
			date : 32,
		),
		$client->updateChannelTooLong(
			channel_id : -814226828857941490,
			pts : 2,
		),
		$client->updateChannel(
			channel_id : -2667513066332790768,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(
					user_id : -762209773533676474,
				),
			),
			pts : 7,
			pts_count : 47,
		),
		$client->updateReadChannelInbox(
			folder_id : 27,
			channel_id : 505634443288494640,
			max_id : 7,
			still_unread_count : 60,
			pts : 49,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 2091248082364936936,
			messages : array(9),
			pts : 88,
			pts_count : 44,
		),
		$client->updateChannelMessageViews(
			channel_id : 5171613435029196608,
			id : 0,
			views : 31,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5176608589011849681,
			user_id : -1168534348982991847,
			is_admin : false,
			version : 25,
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
					installed_date : 14,
					id : 1063320011611246506,
					access_hash : 3526034333531021205,
					title : 'oZHAgJU94nOjQ70k',
					short_name : 'dpnfjJyUbXwtVGm5',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 87,
					thumb_version : 72,
					thumb_document_id : -7621397216445607947,
					count : 2,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'jBgEDkcpG2Kt7WNr',
						documents : array(-5808217989883485557),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -1354019750939072891,
						keyword : array('QLelSTK8f7MVwBDs'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 7035372445933220857,
					),
					$client->document(
						id : 80376134238212294,
						access_hash : -8726295040820312688,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 58,
						mime_type : 'tSrOADxcfRyEuWUa',
						size : 4198586532348132250,
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
						dc_id : 55,
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
			order : array(-7922325680155833000),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8611902606960146008,
			user_id : -4635714839958012928,
			query : 'iGnMeU9RtoSkyOFJ',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'xhbfdDlW7HL5jcGX',
		),
		$client->updateBotInlineSend(
			user_id : 652226917239734079,
			query : 'UpRPlIsme8Q5EJW4',
			geo : $client->geoPointEmpty(),
			id : 'ZErims8SNF5O1JkQ',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 2,
				id : -7346999854236486141,
				access_hash : 4921334282573567228,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : -8484516109809489209,
				),
			),
			pts : 14,
			pts_count : 47,
		),
		$client->updateBotCallbackQuery(
			query_id : 3356242820686157785,
			user_id : -3717556802539834455,
			peer : $client->peerUser(
				user_id : -2990022583737989202,
			),
			msg_id : 50,
			chat_instance : 5633612575999994344,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'd6rXCu1FcqvKRlUM',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(
					user_id : 1114298407244796742,
				),
			),
			pts : 40,
			pts_count : 14,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -9064455518866140724,
			user_id : -2811028365201256461,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 79,
				id : -3628364751682845846,
				access_hash : 6758034437328779914,
			),
			chat_instance : 7884838080603317431,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'qX2j9GAl50eIMKzr',
		),
		$client->updateReadChannelOutbox(
			channel_id : -981926449465655543,
			max_id : 41,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -8399578878151080390,
			),
			top_msg_id : 15,
			saved_peer_id : $client->peerUser(
				user_id : 3847379710070512719,
			),
			draft : $client->draftMessageEmpty(
				date : 92,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -1977343526832560748,
			webpage : $client->webPageEmpty(
				id : 6668661710160427203,
				url : 'https://docs.liveproto.dev',
			),
			pts : 32,
			pts_count : 48,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 11,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2043677660276162366,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 69,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -4611204717432269538,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 48,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'qG9RdSgpFfCYUM48',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5270759210674523946,
			data : $client->dataJSON(
				data : '60tYryTkJzRh1clu',
			),
			timeout : 7,
		),
		$client->updateBotShippingQuery(
			query_id : 6309517707806361939,
			user_id : -8538277456974423147,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'gIKn4iRLwNSuVvZs',
				street_line2 : 'j4HYxvfLmwS0rAQ6',
				city : 'zPhJ8Egw2t3sICS5',
				state : 'sOaq7oL8PWn0JhZk',
				country_iso2 : 'HeUtRQ0jaf6dlhOu',
				post_code : 'DVuntYg7z46LxG3e',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 223251519417070142,
			user_id : -5008838797158800668,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'grFfH7EudNaVGzip',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'aZnEXyViTMoOtqjr',
					street_line2 : 'mSpEhsnuBalKeJXI',
					city : '60RJIrsoYzBLaH2p',
					state : 'HQpoFR1jmaGbv5CE',
					country_iso2 : 'SsvLniKtbqJrhF1k',
					post_code : 'bt2OMe4DAkxo5rUG',
				),
			),
			shipping_option_id : 'JubY6Fy8xeaosqwZ',
			currency : 'ZP9TUjlfKzeE8aqS',
			total_amount : -2947298714581733417,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -5453034154850752953,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'l8znY5vJRwVg3cQ1',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'U3p6bEuKcvtR5nks',
				from_version : 92,
				version : 15,
				strings : array(
					$client->langPackString(
						key : 'nyRVQSiC8lPNv6o1',
						value : 'dmnykP2HoNQAOiwL',
					),
					$client->langPackStringPluralized(
						key : 'L0tEdRjzymvc1qG7',
						zero_value : 'KLXuornMacW4dZwg',
						one_value : 'rHRK3ZUECOINkbaw',
						two_value : 'iMJ4smlQKGV5oDTf',
						few_value : 'qRtmkj5cNnFps0W9',
						many_value : '0n7CxomVlzs9vZOf',
						other_value : 'FSQ1GjzM3Wm2ogOy',
					),
					$client->langPackStringDeleted(
						key : 'mQ7nOg4H92AhjxSB',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -2505262275536726884,
			top_msg_id : 99,
			saved_peer_id : $client->peerUser(
				user_id : 57562862588770273,
			),
			messages : array(33),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4179197492104769466,
			available_min_id : 73,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2211618303148078808,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 7817827180121284840,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 951502734703220402,
			),
			msg_id : 13,
			top_msg_id : 29,
			poll_id : 7894369481750556986,
			poll : $client->poll(
				id : 6220756837978883814,
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
					text : 'WMNDuRKbkxtf7v1d',
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
						date : 53,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 38,
				close_date : 81,
				countries_iso2 : array('MzJiFbTNteWnumAP'),
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
						voters : 75,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 83,
				recent_voters : array(
					$client->peerUser(
						user_id : 5835715875892739920,
					),
					$client->peerChat(
						chat_id : -9080887435152858768,
					),
					$client->peerChannel(
						channel_id : -9185421800552538598,
					),
				),
				solution : 'sGkP7BcJj06C4YLS',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 50,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 89,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 23,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 19,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 38,
						language : 'Q0lwCsmE3ejpS7VX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 3660522954420674006,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : 7642565239073151413,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 8,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 29,
						date : 66,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 54,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 31,
						old_text : 'toAFHJsTvBNr3WO0',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 43,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 2398995845767352293,
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
				until_date : 2,
			),
			version : 1,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 4011217350447576348,
					),
					folder_id : 75,
				),
			),
			pts : 68,
			pts_count : 95,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -8324966416254069406,
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
				geo_distance : 88,
				request_chat_title : 'SOMgKsU6ITpC3nD8',
				request_chat_date : 52,
				business_bot_id : -7849548172070996586,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -1210299264515891515,
				registration_month : '7C8KalqUZnjzQhxG',
				phone_country : '+1234567890',
				name_change_date : 46,
				photo_change_date : 90,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -4195677519051464149,
					),
					expires : 45,
					distance : 52,
				),
				$client->peerSelfLocated(
					expires : 17,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(
					user_id : 5842118441481097519,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 1777628431978407516,
			),
			messages : array(66),
			sent_messages : array(78),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 1716377201374413220,
				access_hash : -9207626915662119521,
				slug : '17ntcBkj6DzbKfFV',
				title : 'Ei9XYqj4b2xZ7koI',
				document : $client->documentEmpty(
					id : 3773534279200850651,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 91,
						outbox_accent_color : 19,
						message_colors : array(41),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '1JDw5fqrUsckv3aM',
				installs_count : 55,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7660981343366689219,
			),
			msg_id : 28,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8010928037209212465,
			peer : $client->peerUser(
				user_id : -5092213715912905042,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(95),
			qts : 27,
		),
		$client->updateDialogFilter(
			id : 71,
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
				id : 32,
				title : $client->textWithEntities(
					text : 'Hv0eOoCnF927rXU3',
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
				emoticon : 'ub5AwQTYanJr8Us6',
				color : 67,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(36),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 370167945453874296,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 5560424463367330588,
			id : 39,
			forwards : 51,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8943462274838978820,
			top_msg_id : 85,
			read_max_id : 10,
			broadcast_id : 2748229052196504036,
			broadcast_post : 23,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 2203905277447941841,
			top_msg_id : 55,
			read_max_id : 61,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -2180972416300446261,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -8876955321677672939,
			top_msg_id : 10,
			from_id : $client->peerUser(
				user_id : -8496603691107444105,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 966256090885165700,
			),
			messages : array(81),
			pts : 92,
			pts_count : 3,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7055018793087586915,
			messages : array(31),
			pts : 52,
			pts_count : 6,
		),
		$client->updateChat(
			chat_id : 1938711669000631113,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 3844164802891690654,
				access_hash : -2054091792261312185,
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
						user_id : -6727455232332468181,
					),
					date : 12,
					active_date : 68,
					source : 55,
					volume : 25,
					about : '0mJAQqsZ8W7Ipjlu',
					raise_hand_rating : -1134735843911325884,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'ITCWNlkASMp904R8',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 24,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'aIy1kw7NjPMFc60z',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 79,
					),
					paid_stars_total : -155381781314950489,
				),
			),
			version : 26,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 4415016934438294515,
			),
			call : $client->groupCallDiscarded(
				id : -8578685824158048131,
				access_hash : -964050359171166552,
				duration : 31,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4395166633390248669,
			),
			ttl_period : 30,
		),
		$client->updateChatParticipant(
			chat_id : 641980803379261184,
			date : 72,
			actor_id : -6681271026558445053,
			user_id : -6545329117485889109,
			prev_participant : $client->chatParticipant(
				user_id : -7364245893408153321,
				inviter_id : 2752868737936059633,
				date : 47,
				rank : '8maiNd3lvWzpkFDP',
			),
			new_participant : $client->chatParticipant(
				user_id : -1938216135142484760,
				inviter_id : -7326174462912802709,
				date : 79,
				rank : 'okArWptLYxyc8aBb',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'xqlPbZj1fQOEYvDN',
				admin_id : 8305831451189184581,
				date : 14,
				start_date : 31,
				expire_date : 58,
				usage_limit : 66,
				usage : 8,
				requested : 23,
				subscription_expired : 33,
				title : 'j1whHqS53osdRZCF',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 55,
					amount : 6302799458066111679,
				),
			),
			qts : 43,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 6006553269722724927,
			date : 85,
			actor_id : 2629776439936149569,
			user_id : 8226765738049957937,
			prev_participant : $client->channelParticipant(
				user_id : -7930053099755031553,
				date : 73,
				subscription_until_date : 41,
				rank : 'G6hBJYVSK795fAFO',
			),
			new_participant : $client->channelParticipant(
				user_id : 6916769028008493404,
				date : 11,
				subscription_until_date : 46,
				rank : 'ihNID52vlC1zPRyu',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'qNuGKcIRLyrSWYCp',
				admin_id : 7896773190163132366,
				date : 46,
				start_date : 47,
				expire_date : 4,
				usage_limit : 7,
				usage : 37,
				requested : 27,
				subscription_expired : 49,
				title : '7fhe1OQMKj8d9pY2',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 95,
					amount : -4789378307572366884,
				),
			),
			qts : 41,
		),
		$client->updateBotStopped(
			user_id : 169266442945753828,
			date : 36,
			stopped : false,
			qts : 38,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'P10ka7wtV3ACXuRF',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7073032492472936263,
			),
			bot_id : 5672395994163016111,
			commands : array(
				$client->botCommand(
					command : 'GOPTZDjKgFSWCkwm',
					description : 'i7x1lNUKWTvEYLJP',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 866689519243428666,
			),
			requests_pending : 33,
			recent_requesters : array(-8929249619165460809),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -937674363652937571,
			),
			date : 41,
			user_id : 8267187110856296221,
			about : '7jqlYBLmCrhwQs4R',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'aSqYNXjkzvcUifMw',
				admin_id : -8580079078928573956,
				date : 64,
				start_date : 83,
				expire_date : 34,
				usage_limit : 38,
				usage : 5,
				requested : 52,
				subscription_expired : 20,
				title : '5H3AuT1f9rwNICZR',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 48,
					amount : 8455245406818865695,
				),
			),
			qts : 8,
			query_id : -7285947424454487681,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -6007739991236100131,
			),
			msg_id : 16,
			top_msg_id : 1,
			saved_peer_id : $client->peerUser(
				user_id : -7525400133856871251,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 24,
						reaction : $client->reactionEmpty(...),
						count : 13,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 20,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 63,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -4237923325525349726,
		),
		$client->updateBotMenuButton(
			bot_id : 4622176281018431545,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2031129294278510941,
			),
			msg_id : 61,
			transcription_id : 4271837531918005937,
			text : 'EbzSqL6rFWDHNy1d',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 3525593561417975549,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -7588092252378145454,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 1078693224776818821,
			),
			msg_id : 58,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 67,
					h : 16,
					thumb : $client->photoSizeEmpty(
						type : '2XgtjoYUKTpQwbdc',
					),
					video_duration : 14,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 1613846706876060299,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 2646573710548479213,
			),
			story : $client->storyItemDeleted(
				id : 11,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -5388673761021966164,
			),
			max_id : 37,
		),
		$client->updateStoryID(
			id : 0,
			random_id : 9145246792787652351,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 24,
				cooldown_until_date : 87,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 8031822711065330878,
			),
			story_id : 15,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -6670153933363489651,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'bRykHi3P5sE9Qqje',
				user_id : -1290978997630939382,
				giveaway_msg_id : 34,
				date : 82,
				expires : 49,
				used_gift_slug : 'EMSwG0hB5CI7y6NV',
				multiplier : 92,
				stars : -3613836281345888880,
			),
			qts : 18,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -5528715971473129392,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -970899974425218525,
			),
			wallpaper : $client->wallPaper(
				id : -73255081077145704,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -3365908636893794191,
				slug : 'Xx4cYLoGj7NTkE2A',
				document : $client->documentEmpty(
					id : 1742919180693452433,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 21,
					second_background_color : 61,
					third_background_color : 88,
					fourth_background_color : 3,
					intensity : 57,
					rotation : 32,
					emoticon : 'Z6QmLOh4IijrRx2E',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 4343147906226731037,
			),
			msg_id : 70,
			date : 93,
			actor : $client->peerUser(
				user_id : 1079005887892805514,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '1TLRQ0m765JSBINk',
				),
				$client->reactionCustomEmoji(
					document_id : -9070509869546333840,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '4JKbjpT75sC2nEoD',
				),
				$client->reactionCustomEmoji(
					document_id : -5317841719402922290,
				),
				$client->reactionPaid(),
			),
			qts : 64,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 448130930402477945,
			),
			msg_id : 73,
			date : 12,
			reactions : array(
				$client->reactionCount(
					chosen_order : 87,
					reaction : $client->reactionEmpty(),
					count : 95,
				),
			),
			qts : 74,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 3990365331704983828,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -3248145029345758968,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 18,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'zXIaCyFGcKoMOlm3',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 30,
					shortcut : 'Q01NguWBTM92yLDJ',
					top_message : 97,
					count : 91,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 55,
				shortcut : 'Lh1IZ2AbtC3Kjwlm',
				top_message : 29,
				count : 53,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 70,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : 441478389806946410,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 34,
			messages : array(73),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'U8lPHCTwFobpiey1',
				user_id : -2632494290465282040,
				dc_id : 6,
				date : 3,
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
			qts : 86,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'ca6VHh9kuwS4z3Fj',
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : 5442197196922063275,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 59,
				peer_id : $client->peerUser(
					user_id : -4748062981808628197,
				),
			),
			qts : 66,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '68KVeHEPIasgkfwX',
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : -7983766658316029325,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : -8993341036722078941,
				),
			),
			qts : 77,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'JWk0ZmCXo7tarl8q',
			peer : $client->peerUser(
				user_id : -3627431961841188939,
			),
			messages : array(61),
			qts : 72,
		),
		$client->updateNewStoryReaction(
			story_id : 30,
			peer : $client->peerUser(
				user_id : 972275103763554715,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -1475190906599597939,
				nanos : 81,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 6098804509482735228,
			user_id : -3153722968161189905,
			connection_id : 'XYj1r8mIOgcsd3wp',
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(
					user_id : -7036400623807370973,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : -9005634404915492962,
				),
			),
			chat_instance : 6317879761774542217,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4321702313679943252,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 6025080374149491330,
					nanos : 97,
				),
				available_balance : $client->starsAmount(
					amount : -1045077740289004741,
					nanos : 32,
				),
				overall_revenue : $client->starsAmount(
					amount : -8963129447810599809,
					nanos : 28,
				),
				next_withdrawal_at : 59,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 7717795921371905290,
			payload : 'Awr4dXfp5GIyR3BU',
			qts : 91,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 65,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 76,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 3102000060993796486,
				access_hash : 3253794318958366784,
			),
			sub_chain_id : 93,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 27,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 4164940826711181811,
			saved_peer_id : $client->peerUser(
				user_id : -2694512353066532754,
			),
			read_max_id : 58,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5047752481091176808,
			saved_peer_id : $client->peerUser(
				user_id : 7001293685849749222,
			),
			read_max_id : 6,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -3368287329568735691,
			saved_peer_id : $client->peerUser(
				user_id : -7860392602233676061,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 1126753075705906598,
				access_hash : -8607331428435389249,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 73,
				from_id : $client->peerUser(
					user_id : 7753356627399795075,
				),
				date : 20,
				message : $client->textWithEntities(
					text : 'oH9yrPtQ5uMlKhYe',
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
				paid_message_stars : 7388082922953552655,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -657037217703561973,
				access_hash : 7750922797250432111,
			),
			from_id : $client->peerUser(
				user_id : 4954012789531430814,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6678139998290020198,
			),
			topic_id : 71,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -8235735763309896381,
			),
			order : array(26),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 5450599603161952944,
				access_hash : -5450711622828703338,
			),
			messages : array(96),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -2146629649970117445,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 6180529180591690230,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 5695638876397673876,
				bid_date : 36,
				min_bid_amount : -4866102499520908674,
				bid_peer : $client->peerUser(
					user_id : 1257121836207286526,
				),
				acquired_count : 44,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : -2771679191946093306,
			user_id : 883970839282816719,
			rank : 'nQrOfaBSDkWA9o2L',
			version : 81,
		),
		$client->updateManagedBot(
			user_id : 3226420016657241903,
			bot_id : -9063783919570332063,
			qts : 99,
		),
		$client->updateBotGuestChatQuery(
			query_id : 1569252770605549839,
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : -1294625221141927393,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 69,
					peer_id : $client->peerUser(
						user_id : 2840193228321151302,
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
					id : 0,
					from_id : $client->peerUser(
						user_id : 2218329391318209288,
					),
					from_boosts_applied : 72,
					from_rank : 'YSe9b7lCuOB4zJGM',
					peer_id : $client->peerUser(
						user_id : 5478229680680821887,
					),
					saved_peer_id : $client->peerUser(
						user_id : -4149732641822816349,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'IBx1uCStyeiVkmHW',
						date : 90,
						channel_post : 26,
						post_author : '2iCBFqokQTvg5Hwr',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 80,
						saved_from_id : $client->peerUser(...),
						saved_from_name : '6wyD3UoQW4jEqkYS',
						saved_date : 65,
						psa_type : 'bSv9MB8JlXQNhmFg',
					),
					via_bot_id : -5157830793893669729,
					via_business_bot_id : -6906535354881882457,
					guestchat_via_from : $client->peerUser(
						user_id : 7114740998920025740,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 35,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 21,
						quote_text : '6oLjSv9iRA1dkJYB',
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
						quote_offset : 94,
						todo_item_id : 29,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 71,
					message : 'G9IW2ir4DVNx3ACE',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 88,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 61,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 35,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 21,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 1,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 39,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 65,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 44,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 76,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 25,
							language : 'Wkgrm3IXOU9FoJhQ',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 69,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 57,
							user_id : -6697078168397912404,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 25,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 89,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 53,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 73,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 84,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 82,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 73,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 93,
							document_id : 1245885515055480585,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 11,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 3,
							date : 56,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 96,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 76,
							old_text : 'sKWgNuydI4j736w9',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 70,
						),
					),
					views : 74,
					forwards : 53,
					replies : $client->messageReplies(
						comments : true,
						replies : 56,
						replies_pts : 87,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : 6738701965003794331,
						max_id : 18,
						read_max_id : 32,
					),
					edit_date : 2,
					post_author : 's02BIlnYozSTpGOu',
					grouped_id : -6977083628185633545,
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
							platform : 'Vya7qeoSd6z0138Y',
							reason : 'fukB2ivXUjhWqg6z',
							text : 'UzxNvbQKoWBdEmIA',
						),
					),
					ttl_period : 63,
					quick_reply_shortcut_id : 16,
					effect : 4475231916969663495,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'fWBCE2M45KZjLASo',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 71,
					paid_message_stars : 5946060412172300274,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 16,
					),
					schedule_repeat_period : 7,
					summary_from_language : 'x4YBpXVgWTUinLu3',
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
					id : 48,
					from_id : $client->peerUser(
						user_id : 2121605440055060275,
					),
					peer_id : $client->peerUser(
						user_id : 6374695318516448641,
					),
					saved_peer_id : $client->peerUser(
						user_id : -7875942685326649572,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 29,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 46,
						quote_text : 'al4wFjPWoRkdJKUS',
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
						quote_offset : 75,
						todo_item_id : 34,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 14,
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
					ttl_period : 71,
				),
			),
			qts : 94,
		),
		$client->updateAiComposeTones(),
		$client->updateJoinChatWebViewDecision(
			peer : $client->peerUser(
				user_id : 5570988644342467747,
			),
			query_id : 7522390465534263498,
			result : $client->joinChatBotResultApproved(),
		),
		$client->updateNewBotConnection(
			confirmed : true,
			bot_id : 3345732599728523329,
			date : 75,
			device : 'KqmvrO7bxfucaZDJ',
			location : 'ePjUhfqVEbJI0tHw',
		),
		$client->updateWebBrowserSettings(
			open_external_browser : true,
			display_close_button : true,
		),
		$client->updateWebBrowserException(
			delete : true,
			open_external_browser : false,
			exception : $client->webDomainException(
				domain : '5F26O0RBqQbHEuDG',
				url : 'https://docs.liveproto.dev',
				title : 'YMS8zkZtqru5sXCI',
				favicon : 4047899593601849151,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 1310553569347474035,
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
			id : -2438324414059983535,
			access_hash : 7295459159086610445,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F8WlvIqgSMaYekKn',
					reason : 'nZ9Gr40odpgc5LRf',
					text : 'i4PeBotmhUVSFHCZ',
				),
			),
			bot_inline_placeholder : 'H5Tb9y0qV46lvGJU',
			lang_code : 'P9Mnz7iVUqZWHTOg',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : 5028223828684855970,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -1288593563077214952,
			),
			bot_active_users : 24,
			bot_verification_icon : 7483935683719037143,
			send_paid_messages_stars : -560897776626413922,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5991335808862574744,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4224961634562343347,
			title : '7BOZwaMpR9s8EvLG',
			photo : $client->chatPhotoEmpty(),
			participants_count : 44,
			date : 4,
			version : 64,
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
				until_date : 47,
			),
		),
		$client->chatForbidden(
			id : 8909634668124540254,
			title : 'xVjmztBupD8cI4QC',
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
			id : 8726641617790531825,
			access_hash : -6940757487211222533,
			title : 'OkZqYAHPmW4KyEln',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eWSGxQiqjZp8MwUE',
					reason : 'Aj5MI1XDFaBJTLhw',
					text : 'U6s19G5XLJT34B07',
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
				until_date : 26,
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
				until_date : 65,
			),
			participants_count : 6,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 20,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -7161883740977038760,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 7571821251390949143,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 0,
			bot_verification_icon : -7961647141841912708,
			send_paid_messages_stars : -486025945031858146,
			linked_monoforum_id : -4607488494898018835,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5846227366613467397,
			access_hash : -2150850422201982994,
			title : 'ntjN1gXOKxCWTuEc',
			until_date : 7,
		),
	),
	date : 100,
	seq_start : 53,
	seq : 14,
);
```